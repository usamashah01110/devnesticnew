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
    // Section one (Hero Section)
    public function index()
    {
        return view('admin.sections.sectionone');
    }
    public function sectionOneCreate()
    {
        $title = 'Create Section One';
        return view('admin.inputs.sectionOneInput', compact('title'));
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

        $section = $this->sectionRepo->create($data);

        return redirect('/')->with(['section_data' => $section]);
    }


    // Section two (About Section)
    public function sectiontwo()
    {
        return view('admin.sections.sectiontwo');
    }
    
    public function sectiontwostore(Request $request)
    {
        $data = $request->validate([
            'heading_one' => 'nullable|string',
            'short_about_us' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'experiance' => 'nullable|string',
            'ceo_founder_name' => 'nullable|string',
            'ceo_founder_img' => 'nullable|string',
            'large_img' => 'nullable|image|max:2048',
            'small_img' => 'nullable|image|max:2048',
            'contact' => 'nullable|String'
        ]);

        if ($request->hasFile('large_img')) {
            $data['large_img'] = $request->file('large_img')->store('section_two', 'public');
        }
        if ($request->hasFile('small_img')) {
            $data['small_img'] = $request->file('small_img')->store('section_two', 'public');
        }
        if ($request->hasFile('small_img')) {
            $data['small_img'] = $request->file('small_img')->store('section_two', 'public');
        }
        if ($request->hasFile('ceo_founder_img')) {
            $data['ceo_founder_img'] = $request->file('ceo_founder_img')->store('section_two', 'public');
        }

        $section = $this->sectionRepo->create($data);

        return redirect('/')->with(['section_data' => $section]);
    }

    // Section Three

    public function sectionThree()
    {
        return view('admin.sections.sectionthree');
    }



    // Section Four
    public function sectionFour()
    {
        return view('admin.sections.sectionfour');
    }


    // Section Five
    public function sectionFive()
    {
        return view('admin.sections.sectionfive');
    }


    // Section Six
    public function sectionSix()
    {
        return view('admin.sections.sectionsix');
    }

    // Section Seven
    public function sectionSeven()
    {
        return view('admin.sections.sectionseven');
    }
}
