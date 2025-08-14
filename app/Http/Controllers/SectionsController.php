<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;
use App\Repositories\Interfaces\SectionFiveRepositoryInterface;
use App\Repositories\Interfaces\SectionSixRepositoryInterface;
use App\Repositories\Interfaces\SectionSevenRepositoryInterface;

class SectionsController extends Controller
{
    protected $sectionOneRepo;
    protected $sectionTwoRepo;
    protected $sectionThreeRepo;
    protected $sectionFourRepo;
    protected $sectionFiveRepo;
    protected $sectionSixRepo;
    protected $sectionSevenRepo;
    public function __construct(
        SectionOneRepositoryInterface $sectionOneRepo,
        SectionTwoRepositoryInterface $sectionTwoRepo,
        SectionThreeRepositoryInterface $sectionThreeRepo,
        SectionFourRepositoryInterface $sectionFourRepo,
        SectionFiveRepositoryInterface $sectionFiveRepo,
        SectionSixRepositoryInterface $sectionSixRepo,
        SectionSevenRepositoryInterface $sectionSevenRepo

    ) {
        $this->sectionOneRepo = $sectionOneRepo;
        $this->sectionTwoRepo = $sectionTwoRepo;
        $this->sectionThreeRepo = $sectionThreeRepo;
        $this->sectionFourRepo = $sectionFourRepo;
        $this->sectionFiveRepo = $sectionFiveRepo;
        $this->sectionSixRepo = $sectionSixRepo;
        $this->sectionSevenRepo = $sectionSevenRepo;
    }
    // Section one (Hero Section)
    public function index()
    {
        $sectionOne = $this->sectionOneRepo->all();
        return view('admin.sections.sectionone', compact('sectionOne'));
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

    public function editView($id)
    {
        $sectionOne = $this->sectionOneRepo->find($id);
        $title = "Update Section One";
        return view('admin.editInputs.editsectionone', compact('sectionOne', 'title'));
    }

    public function update(Request $request, $id)
    {
        $sectionone = $this->sectionOneRepo->find($id);
        if (!$sectionone) {
            return redirect()->back();
        }

        $data = $request->validate(
            [
                'heading_one' => 'nullable|string',
                'paragraph' => 'nullable|string',
                'btn_one_text' => 'nullable|string',
                'years' => 'nullable|string',
                'clients' => 'nullable|string',
                'success_rate' => 'nullable|string',
                'image_path' => 'nullable|image|max:2048',
            ]
        );

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('section_ones', 'public');
        }
        $sectionOne = $this->sectionOneRepo->update($id, $data);
        return redirect('/')->with('section_one', $sectionOne);
    }

    public function deleteOne($id)
    {
        $sectionOne = $this->sectionOneRepo->find($id);
        if (!$sectionOne) {
            return redirect()->back();
        }
        $sectionOne->delete();
        return redirect()->back();
    }


    // Section two (About Section)
    public function sectiontwo()
    {
        $sectionTwo = $this->sectionTwoRepo->all();
        return view('admin.sections.sectiontwo', compact('sectionTwo'));
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

    public function sectionTwoEditView($id)
    {
        $sectionTwo = $this->sectionTwoRepo->find($id);
        return view('admin.editInputs.editsectiontwo', compact('sectionTwo'));
    }
    public function deleteTwo($id)
    {
        $sectionTwo = $this->sectionTwoRepo->find($id);
        $sectionTwo->delete();
        return redirect()->back();
    }

    // Section Three

    public function sectionThree()
    {
        $sectionThree = $this->sectionThreeRepo->all();
        return view('admin.sections.sectionthree', compact('sectionThree'));
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
    public function sectionThreeEditView($id)
    {
        $sectionThree = $this->sectionThreeRepo->find($id);
        return view('admin.editInputs.editsectionthree', compact('sectionThree'));
    }
    public function deleteThree($id)
    {
        $sectionThree = $this->sectionThreeRepo->find($id);
        $sectionThree->delete();
        return redirect()->back();
    }

    // Section Four
    public function sectionFour()
    {
        $sectionFour = $this->sectionFourRepo->all();
        return view('admin.sections.sectionfour', compact('sectionFour'));
    }
    public function sectionFourCreate()
    {
        $title = 'Create Section Four (Portfolio)';
        return view('admin.inputs.sectionFourInput', compact('title'));
    }
    public function sectionFourStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|nullable',
            'description' => 'string|nullable',
            'type' => 'string|nullable',
            'image' => 'image|nullable'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section_four', 'public');
        }
        $sectionFour = $this->sectionFourRepo->create($data);
        return redirect('/')->with(['section_four' => $sectionFour]);
    }
    public function deleteFour($id)
    {
        $sectionFour = $this->sectionFourRepo->find($id);
        $sectionFour->delete();
        return redirect()->back();
    }


    // Section Five
    public function sectionFive()
    {
        $sectionFive = $this->sectionFiveRepo->all();
        return view('admin.sections.sectionfive', compact('sectionFive'));
    }
    public function sectionFiveCreate()
    {
        $title = 'Create Section Five (Team)';
        return view('admin.inputs.sectionfiveInput', compact('title'));
    }
    public function sectionFiveStore(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'string|nullable',
                'description' => 'string|nullable',
                'role' => 'string|nullable',
                'linkedin' => 'url|nullable',
                'twitter' => 'url|nullable',
                'instagram' => 'url|nullable',
                'image' => 'image|nullable'
            ]
        );

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section_five', 'public');
        }

        $sectionFive = $this->sectionFiveRepo->create($data);
        return redirect('/')->with(['section_five' => $sectionFive]);
    }
    public function deleteFive($id)
    {
        $sectionFive = $this->sectionFiveRepo->find($id);
        $sectionFive->delete();
        return redirect()->back();
    }
    public function sectionFiveEditView($id) {
        $sectionFive = $this->sectionFiveRepo->find($id);
        return view('admin.editInputs.editsectionfive', );
    }

    // Section Six
    public function sectionSix()
    {
        $sectionSix = $this->sectionSixRepo->all();
        return view('admin.sections.sectionsix', compact('sectionSix'));
    }
    public function sectionSixCreate()
    {
        $title = 'Create Section Six (FAQs)';
        return view('admin.inputs.sectionSixInput', compact('title'));
    }
    public function sectionSixStore(Request $request)
    {
        $data = $request->validate(
            [
                'question' => 'string|nullable',
                'answer' => 'string|nullable'
            ]
        );
        $sectionSix = $this->sectionSixRepo->create($data);
        return redirect('/')->with(['section_six' => $sectionSix]);
    }
    public function deleteSix($id)
    {
        $sectionSix = $this->sectionSixRepo->find($id);
        $sectionSix->delete();
        return redirect()->back();
    }
    public function sectionSixEditView($id){
        $sectionSix = $this->sectionSixRepo->find($id);
        $title = "Update Section Six (FAQs)";
        return view('admin.editInputs.editsectionsix', compact('sectionSix', 'title'));
    }
    public function updateSix($id, Request $request){
        $sectionsix = $this->sectionSixRepo->find($id);
        $data = $request->validate([
            'question' => 'string|nullable',
            'answer' => 'string|nullable'
        ]);
        $sectionSix = $this->sectionSixRepo->update($id, $data);
        return redirect('/')->with(['section_data'=> $sectionSix]);
    }

    // Section Seven
    public function sectionSeven()
    {
        $sectionSeven = $this->sectionSevenRepo->all();
        return view('admin.sections.sectionseven', compact('sectionSeven'));
    }
    public function sectionSevenCreate()
    {
        $title = 'Create Section Seven (Contact)';
        $btn = 'Save';
        $url = route('section.seven.store');
        $sectionSeven = NULL;
        return view('admin.inputs.sectionSevenInput', compact('title', 'btn', 'sectionSeven', 'url'));
    }
    public function sectionSevenStore(Request $request)
    {
        $data = $request->validate(
            [
                'building_number' => 'string|nullable',
                'street' => 'string|nullable',
                'city' => 'string|nullable',
                'zip_code' => 'string|nullable',
                'contact_one' => 'string|nullable',
                'contact_two' => 'string|nullable',
                'email' => 'email|nullable'
            ]
        );
        $sectionSeven = $this->sectionSevenRepo->create($data);
        return redirect('/')->with(['section_seven' => $sectionSeven]);
    }
    public function sectionSevenEditView($id)
    {
        $sectionSeven = $this->sectionSevenRepo->find($id);
        $title = 'Update Section Seven (Contact)';
        return view('admin.editInputs.editsectionseven', compact('sectionSeven', 'title'));
    }
    public function deleteSeven($id)
    {
        $sectionSeven = $this->sectionSevenRepo->find($id);
        $sectionSeven->delete();
        return redirect()->back();
    }

    public function updateSeven($id, Request $request)
    {
        $sectionseven = $this->sectionSevenRepo->find($id);
        if (! $sectionseven) {
            return redirect()->back();
        }
        $data = $request->validate(
            [
                'building_number' => 'string|nullable',
                'street' => 'string|nullable',
                'city' => 'string|nullable',
                'zip_code' => 'string|nullable',
                'contact_one' => 'string|nullable',
                'contact_two' => 'string|nullable',
                'email' => 'email|nullable'
            ]
        );
        $sectionSeven = $this->sectionSevenRepo->update($id, $data);
        return redirect('/')->with('secion_data', $sectionSeven);
    }
}
