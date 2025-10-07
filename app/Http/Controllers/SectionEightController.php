<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionEightRepositoryInterface;

class SectionEightController extends BaseController
{
    public function __construct(SectionEightRepositoryInterface $repository)
    {
        parent::__construct($repository, 'SectionEight', 'section_eight');
    }

    protected function getValidationRules(): array
    {
        return [
            'developer_id' => 'string',
            'name' => 'string|nullable',
            'role' => 'string|nullable',
            'description' => 'string|nullable',
            'tech1' => 'string|nullable',
            'tech2' => 'string|nullable',
            'tech3' => 'string|nullable',
            'tech4' => 'string|nullable',
            'image' => 'image|nullable'
        ];
    }

    protected function getFileFields(): array
    {
        return ['image'];
    }
}
