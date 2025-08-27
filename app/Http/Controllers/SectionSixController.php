<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionSixRepositoryInterface;

class SectionSixController extends BaseController
{
    public function __construct(SectionSixRepositoryInterface $repository)
    {
        parent::__construct($repository, 'Section Six', 'section_six');
    }

    protected function getValidationRules(): array
    {
        return [
            'question' => 'string|nullable',
            'answer' => 'string|nullable'
        ];
    }

    protected function getFileFields(): array
    {
        return [];
    }
}
