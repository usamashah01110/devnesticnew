<?php

return [
    'hero' => [
        'repository' => App\Repositories\Interfaces\SectionOneRepositoryInterface::class,
        'table' => 'section_ones',
        'view' => 'heroSection',
        'validation' => [
            'heading_one' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'btn_one_text' => 'nullable|string',
            'years' => 'nullable|string',
            'clients' => 'nullable|string',
            'success_rate' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
        ],
        'file_fields' => ['image_path'],
    ],

    'about' => [
        'repository' => App\Repositories\Interfaces\SectionTwoRepositoryInterface::class,
        'table' => 'section_twos',
        'view' => 'aboutSection',
        'validation' => [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ],
        'file_fields' => ['image'],
    ],

    // add more sections as needed...
];
