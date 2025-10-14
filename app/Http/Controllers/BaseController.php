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
        $records = $this->repository->all();
        $viewName = 'admin.sections.' . $this->sectionName . '.index';

        return view($viewName, compact('records'));
    }

    /**
     * Show the form for creating a new section item
     */
    public function create(): View
    {
        $title = "Create {$this->sectionName}";
        $viewName = 'admin.sections.' . $this->sectionName . '.create';

        return view($viewName, compact('title'));
    }

    /**
     * Store a newly created section item
     */
    public function store(Request $request, $section): RedirectResponse
    {
        $data = $this->validateRequest($request);

        $data = $this->handleFileUploads($request, $data);

        $item = $this->repository->create($data);

        return redirect()->route('section.index', ['section' => $section]);
    }

    /**
     * Show the form for editing the specified section item
     */
    public function edit($section, $id): View
    {
        $record = $this->findOrFail($id);
        $title = "Update Section";
        $viewName = 'admin.sections.' . $this->sectionName . '.edit';

        return view($viewName, compact('record', 'title'));
    }

    /**
     * Update the specified section item
     */
    public function update(Request $request,$section): RedirectResponse
    {
        $item = $this->findOrFail($request->id);

        $data = $this->validateRequest($request);

        $data = $this->handleFileUploads($request, $data);

        $updatedItem = $this->repository->update($request->id, $data);

        return redirect()->route('section.index', ['section' => $section]);
    }

    /**
     * Remove the specified section item
     */
    public function destroy($section, $id): RedirectResponse
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
    protected function redirectWithSuccess($item): View
    {
        $sessionKey = 'section_data';
        $records = $this->repository->all();
        $viewName = 'admin.sections.' . $this->sectionName . '.index';
        return view($viewName,compact('records','sessionKey'));
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
