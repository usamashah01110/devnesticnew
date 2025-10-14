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
            'heading_one' => 'nullable|string',
            'short_about_us' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'experiance' => 'nullable|string',
            'ceo_founder_name' => 'nullable|string',
            'ceo_founder_img' => 'nullable|image',
            'large_img' => 'nullable|image|max:2048',
            'small_img' => 'nullable|image|max:2048',
            'contact' => 'nullable|string'
        ],
        'file_fields' => ['ceo_founder_img','large_img', 'small_img'],
    ],

    'service' => [
        'repository' => App\Repositories\Interfaces\SectionThreeRepositoryInterface::class,
        'table' => 'section_threes',
        'view' => 'serviceSection',
        'validation' => [
            'logo' => 'nullable|image|max:2048',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'link' => 'nullable|url'
        ],
        'file_fields' => ['logo'],
    ],
    'project' => [
        'repository' => App\Repositories\Interfaces\SectionFourRepositoryInterface::class,
        'table' => 'section_fours',
        'view' => 'projectSection',
        'validation' => [
            'name' => 'string|nullable',
            'description' => 'string|nullable',
            'type' => 'string|nullable',
            'image' => 'image|nullable'
        ],
        'file_fields' => ['image'],
    ],
    'developer' => [
        'repository' => App\Repositories\Interfaces\SectionFiveRepositoryInterface::class,
        'table' => 'section_fives',
        'view' => 'developerSection',
        'validation' => [
            'name' => 'string|nullable',
            'description' => 'string|nullable',
            'role' => 'string|nullable',
            'linkedin' => 'url|nullable',
            'twitter' => 'url|nullable',
            'instagram' => 'url|nullable',
            'image' => 'image|nullable'
        ],
        'file_fields' => ['image'],
    ],
    'faq' => [
        'repository' => App\Repositories\Interfaces\SectionSixRepositoryInterface::class,
        'table' => 'section_sixes',
        'view' => 'faqSection',
        'validation' => [
            'question' => 'string|nullable',
            'answer' => 'string|nullable'
        ],
    ],
    'contact' => [
        'repository' => App\Repositories\Interfaces\SectionSevenRepositoryInterface::class,
        'table' => 'section_sevens',
        'view' => 'contactSection',
        'validation' => [
            'building_number' => 'string|nullable',
            'street' => 'string|nullable',
            'city' => 'string|nullable',
            'zip_code' => 'string|nullable',
            'contact_one' => 'string|nullable',
            'contact_two' => 'string|nullable',
            'email' => 'email|nullable',
        ],
    ],

    // add more sections as needed...
];
