<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionSevenRepositoryInterface;
use Illuminate\View\View;

class SectionSevenController extends BaseController
{
    public function __construct(SectionSevenRepositoryInterface $repository)
    {
        parent::__construct($repository, 'SectionSeven', 'section_seven');
    }

    protected function getValidationRules(): array
    {
        return [
            'building_number' => 'string|nullable',
            'street' => 'string|nullable',
            'city' => 'string|nullable',
            'zip_code' => 'string|nullable',
            'contact_one' => 'string|nullable',
            'contact_two' => 'string|nullable',
            'email' => 'email|nullable'
        ];
    }

    protected function getFileFields(): array
    {
        return [];
    }

    // Override create method to match original implementation
    public function create(): View
    {
        $title = 'Create Section Seven (Contact)';
        $btn = 'Save';
        $url = route('section.seven.store');
        $sectionSeven = null;

        return view('admin.inputs.sectionSevenInput', compact('title', 'btn', 'sectionSeven', 'url'));
    }
}

