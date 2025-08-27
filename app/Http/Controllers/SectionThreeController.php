<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;

class SectionThreeController extends BaseController
{
    public function __construct(SectionThreeRepositoryInterface $repository)
    {
        parent::__construct($repository, 'Section Three', 'section_three');
    }

    protected function getValidationRules(): array
    {
        return [
            'logo' => 'nullable|image|max:2048',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'link' => 'nullable|url'
        ];
    }

    protected function getFileFields(): array
    {
        return ['logo'];
    }
}
