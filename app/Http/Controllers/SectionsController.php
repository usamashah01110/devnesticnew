<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;

class SectionsController extends Controller
{
    protected $sectionOneRepo;
    protected $sectionTwoRepo;
    protected $sectionThreeRepo;
    protected $sectionFourRepo;
    public function __construct(
        SectionOneRepositoryInterface $sectionOneRepo,
        SectionTwoRepositoryInterface $sectionTwoRepo,
        SectionThreeRepositoryInterface $sectionThreeRepo,
        SectionFourRepositoryInterface $sectionFourRepo
    ) {
        $this->sectionOneRepo = $sectionOneRepo;
        $this->sectionTwoRepo = $sectionTwoRepo;
        $this->sectionThreeRepo = $sectionThreeRepo;
        $this->sectionFourRepo = $sectionFourRepo;
    }
    // Section one (Hero Section)
    public function index()
    {
        $sectionOne = $this->sectionOneRepo->all();
        return view('admin.sections.sectionone', $sectionOne);
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

        $sectionOne = $this->sectionOneRepo->create($data);
        return redirect('/')->with(['section_data' => $sectionOne]);
    }


    // Section two (About Section)
    public function sectiontwo()
    {
        return view('admin.sections.sectiontwo');
    }

    public function sectiontwoCreate()
    {
        $title = "Create Section Two";
        return view('admin.inputs.sectionTwoInput', compact('title'));
    }


    public function sectiontwostore(Request $request)
    {
        $data = $request->validate([
            'heading_one' => 'nullable|string',
            'short_about_us' => 'nullable|string',
            'paragraph' => 'nullable|string',
            'experiance' => 'nullable|string',
            'ceo_founder_name' => 'nullable|string',
            'ceo_founder_img' => 'nullable|image',
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

        $sectionTwo = $this->sectionTwoRepo->create($data);

        return redirect('/')->with(['section_data' => $sectionTwo]);
    }

    // Section Three

    public function sectionThree()
    {
        return view('admin.sections.sectionthree');
    }
    public function sectionThreeCreate()
    {
        $title = "Create Section Three";
        return view('admin.inputs.sectionThreeInput', compact('title'));
    }
    public function sectionThreeStore(Request $request)
    {
        $data = $request->validate([
            'logo' => 'nullable|image|max:2048',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'link' => 'nullable|url'
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('section_three', 'public');
        }

        $sectionThree = $this->sectionThreeRepo->create($data);
        return redirect('/')->with(['section_three_data' => $sectionThree]);
    }


    // Section Four
    public function sectionFour()
    {
        return view('admin.sections.sectionfour');
    }
    public function sectionFourCreate() {
        $title = 'Create Section Four (Portfolio)';
        return view('admin.inputs.sectionFourInput', compact('title'));
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
