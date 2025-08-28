<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;

class SectionOneController extends BaseController
{
    public function __construct(SectionOneRepositoryInterface $repository)
    {
        parent::__construct($repository, 'SectionOne', 'section_ones');
    }

    protected function getValidationRules(): array
    {
        return [
            'heading_one' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'btn_one_text' => 'nullable|string',
            'years' => 'nullable|string',
            'clients' => 'nullable|string',
            'success_rate' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
        ];
    }

    protected function getFileFields(): array
    {
        return ['image_path'];

    }
}
