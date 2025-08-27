<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;

class SectionTwoController extends BaseController
{
    public function __construct(SectionTwoRepositoryInterface $repository)
    {
        parent::__construct($repository, 'Section Two', 'section_two');
    }

    protected function getValidationRules(): array
    {
        return [
            'heading_one' => 'nullable|string',
            'short_about_us' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'experiance' => 'nullable|string',
            'ceo_founder_name' => 'nullable|string',
            'ceo_founder_img' => 'nullable|image',
            'large_img' => 'nullable|image|max:2048',
            'small_img' => 'nullable|image|max:2048',
            'contact' => 'nullable|string'
        ];
    }

    protected function getFileFields(): array
    {
        return ['ceo_founder_img', 'large_img', 'small_img'];
    }
}
