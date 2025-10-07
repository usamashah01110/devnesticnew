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

    public function __construct($repository, string $sectionName, string $storageFolder)
    {
        $this->repository = $repository;
        $this->sectionName = $sectionName;
        $this->storageFolder = $storageFolder;
    }

    /**
     * Display a listing of the section items
     */
    public function index(): View
    {
        $items = $this->repository->all();
        $viewName = 'admin.sections.' . $this->sectionName;

        return view($viewName, [
            strtolower($this->sectionName) => $items
        ]);
    }

    /**
     * Show the form for creating a new section item
     */
    public function create(): View
    {
        $title = "Create {$this->sectionName}";
        $viewName = 'admin.inputs.' . $this->sectionName . 'Input';

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

        return view($viewName, [
            strtolower($this->sectionName) => $item,
            'title' => $title
        ]);
    }

    /**
     * Update the specified section item
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $item = $this->findOrFail($id);

        $data = $this->validateRequest($request);
        $data = $this->handleFileUploads($request, $data);

        $updatedItem = $this->repository->update($id, $data);

        return $this->redirectWithSuccess($updatedItem);
    }

    /**
     * Remove the specified section item
     */
    public function destroy($id): RedirectResponse
    {
        $item = $this->findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', "{$this->sectionName} deleted successfully");
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
    protected function redirectWithSuccess($item): RedirectResponse
    {
        $sessionKey = 'section_data';
        return redirect('/')->with($sessionKey, $item);
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
