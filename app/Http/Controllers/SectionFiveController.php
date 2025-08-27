<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionFiveRepositoryInterface;

class SectionFiveController extends BaseController
{
    public function __construct(SectionFiveRepositoryInterface $repository)
    {
        parent::__construct($repository, 'Section Five', 'section_five');
    }

    protected function getValidationRules(): array
    {
        return [
            'name' => 'string|nullable',
            'description' => 'string|nullable',
            'role' => 'string|nullable',
            'linkedin' => 'url|nullable',
            'twitter' => 'url|nullable',
            'instagram' => 'url|nullable',
            'image' => 'image|nullable'
        ];
    }

    protected function getFileFields(): array
    {
        return ['image'];
    }
}
