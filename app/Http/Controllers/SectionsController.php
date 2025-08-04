<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;

class SectionsController extends Controller
{
    protected $sectionRepo;

    public function __construct(SectionOneRepositoryInterface $sectionRepo)
    {
        $this->sectionRepo = $sectionRepo;
    }

    public function index(){
        return view('admin.sections.sectionone');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'heading_one' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'btn_one_text' => 'nullable|string',
            'years' => 'nullable|string',
            'clients' => 'nullable|string',
            'success_rate' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('section_ones', 'public');
        }

        $this->sectionRepo->create($data);

        return redirect()->back()->with('success', 'Section One Created Successfully!');
    }
}

