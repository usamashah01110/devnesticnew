<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;

class SectionFourController extends BaseController
{
    public function __construct(SectionFourRepositoryInterface $repository)
    {
        parent::__construct($repository, 'Section Four', 'section_four');
    }

    protected function getValidationRules(): array
    {
        return [
            'name' => 'string|nullable',
            'description' => 'string|nullable',
            'type' => 'string|nullable',
            'image' => 'image|nullable'
        ];
    }

    protected function getFileFields(): array
    {
        return ['image'];
    }
}
