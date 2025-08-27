<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

abstract class BaseController extends Controller
{
    protected $repository;
    protected $sectionName;
    protected $validationRules = [];
    protected $fileFields = [];
    protected $storageFolder;
    protected $redirectRoute;

    public function __construct($repository, string $sectionName, string $storageFolder,string $redirectRoute)
    {
        $this->repository = $repository;
        $this->sectionName = $sectionName;
        $this->storageFolder = $storageFolder;
        $this->redirectRoute = $redirectRoute;
    }

    /**
     * Display a listing of the section items
     */
    public function index(): View
    {
        $items = $this->repository->all();
        $viewName = 'admin.sections.' . strtolower($this->sectionName);

        return view($viewName, compact('items'));
    }

    /**
     * Show the form for creating a new section item
     */
    public function create(): View
    {
        $title = "Create {$this->sectionName}";
        $viewName = 'admin.inputs.' . strtolower($this->sectionName) . 'Input';

        return view($viewName, compact('title'));
    }

    /**
     * Store a newly created section item
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateRequest($request);
        $data = $this->handleFileUploads($request, $data);

        $item = $this->repository->create($data);

        return $this->redirectWithSuccess($item);
    }

    /**
     * Show the form for editing the specified section item
     */
    public function edit($id): View
    {
        $item = $this->findOrFail($id);
        $title = "Update {$this->sectionName}";
        $viewName = 'admin.editInputs.edit' . strtolower($this->sectionName);

        return view($viewName, compact('item', 'title'));
    }

    /**
     * Update the specified section item
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $items = $this->findOrFail($id);

        $data = $this->validateRequest($request);
        $data = $this->handleFileUploads($request, $data);

        $updatedItem = $this->repository->update($id, $data);

        return $this->redirectWithSuccess();
    }

    /**
     * Remove the specified section item
     */
    public function destroy($id): RedirectResponse
    {
        $item = $this->findOrFail($id);
        $item->delete();

        return redirect()
        ->route($this->redirectRoute);
    }

    /**
     * Validate the request data
     */
    protected function validateRequest(Request $request): array
    {
        return $request->validate($this->getValidationRules());
    }

    /**
     * Handle file uploads for the request
     */
    protected function handleFileUploads(Request $request, array $data): array
    {
        foreach ($this->getFileFields() as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store($this->storageFolder, 'public');
            }
        }

        return $data;
    }

    /**
     * Find item by ID or fail
     */
    protected function findOrFail($id)
    {
        $item = $this->repository->find($id);

        if (!$item) {
            abort(404, "{$this->sectionName} not found");
        }

        return $item;
    }

    /**
     * Redirect with success message
     */
    protected function redirectWithSuccess(): RedirectResponse
    {
        $items = $this->repository->all();

        return redirect()
            ->route($this->redirectRoute)
            ->with('items', $items);

    }

    /**
     * Get validation rules - to be implemented by child classes
     */
    abstract protected function getValidationRules(): array;

    /**
     * Get file fields - to be implemented by child classes
     */
    abstract protected function getFileFields(): array;
}
