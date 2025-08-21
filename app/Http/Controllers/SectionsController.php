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
use App\Repositories\Interfaces\SectionEightRepositoryInterface;

class SectionsController extends Controller
{
    protected $sectionOneRepo;
    protected $sectionTwoRepo;
    protected $sectionThreeRepo;
    protected $sectionFourRepo;
    protected $sectionFiveRepo;
    protected $sectionSixRepo;
    protected $sectionSevenRepo;
    protected $sectionEightRepo;

    public function __construct(
        SectionOneRepositoryInterface   $sectionOneRepo,
        SectionTwoRepositoryInterface   $sectionTwoRepo,
        SectionThreeRepositoryInterface $sectionThreeRepo,
        SectionFourRepositoryInterface  $sectionFourRepo,
        SectionFiveRepositoryInterface  $sectionFiveRepo,
        SectionSixRepositoryInterface   $sectionSixRepo,
        SectionSevenRepositoryInterface $sectionSevenRepo,
        SectionEightRepositoryInterface $sectionEightRepo

    ) {
        $this->sectionOneRepo = $sectionOneRepo;
        $this->sectionTwoRepo = $sectionTwoRepo;
        $this->sectionThreeRepo = $sectionThreeRepo;
        $this->sectionFourRepo = $sectionFourRepo;
        $this->sectionFiveRepo = $sectionFiveRepo;
        $this->sectionSixRepo = $sectionSixRepo;
        $this->sectionSevenRepo = $sectionSevenRepo;
        $this->sectionEightRepo = $sectionEightRepo;
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
        return redirect()->route('section.index');
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
        return redirect()->route('section.index');
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

        return redirect()->route('section.two');
    }

    public function sectionTwoEditView($id)
    {

        $sectionTwo = $this->sectionTwoRepo->find($id);
        $title = "Update Section Two (About)";
        return view('admin.editInputs.editsectiontwo', compact('sectionTwo', 'title'));
    }

    public function deleteTwo($id)
    {
        $sectionTwo = $this->sectionTwoRepo->find($id);
        $sectionTwo->delete();
        return redirect()->back();
    }

    public function updateTwo($id, Request $request)
    {
        $sectiontwo = $this->sectionTwoRepo->find($id);
        $data = $request->validate(
            [
                'heading_one' => 'nullable|string',
                'short_about_us' => 'nullable|string',
                'paragraph' => 'nullable|string',
                'experiance' => 'nullable|string',
                'ceo_founder_name' => 'nullable|string',
                'ceo_founder_img' => 'nullable|image',
                'large_img' => 'nullable|image|max:2048',
                'small_img' => 'nullable|image|max:2048',
                'contact' => 'nullable|String'
            ]
        );

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

        $sectionTwo = $this->sectionTwoRepo->update($id, $data);
        return redirect()->route('section.two');
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
        return redirect()->route('section.three');
    }

    public function sectionThreeEditView($id)
    {
        $sectionThree = $this->sectionThreeRepo->find($id);
        $title = 'Update Section Three (Services)';
        return view('admin.editInputs.editsectionthree', compact('sectionThree', 'title'));
    }

    public function deleteThree($id)
    {
        $sectionThree = $this->sectionThreeRepo->find($id);
        $sectionThree->delete();
        return redirect()->back();
    }

    public function updateThree($id, Request $request)
    {
        $sectionthree = $this->sectionThreeRepo->find($id);
        $data = $request->validate(
            [
                'logo' => 'nullable|image|max:2048',
                'title' => 'nullable|string',
                'description' => 'nullable|string',
                'link' => 'nullable|url'
            ]
        );
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('section_three', 'public');
        }
        $sectionThree = $this->sectionThreeRepo->update($id, $data);
        return redirect()->route('section.three');
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
        return redirect()->route('section.four');
    }

    public function deleteFour($id)
    {
        $sectionFour = $this->sectionFourRepo->find($id);
        $sectionFour->delete();
        return redirect()->back();
    }

    public function sectionFourEditView($id)
    {
        $sectionFour = $this->sectionFourRepo->find($id);
        $title = 'Edit Section Four (Portfolio)';
        return view('admin.editInputs.editsectionfour', compact('sectionFour', 'title'));
    }

    public function updateFour($id, Request $request)
    {
        $sectionfour = $this->sectionFourRepo->find($id);
        $data = $request->validate(
            [
                'name' => 'string|nullable',
                'description' => 'string|nullable',
                'type' => 'string|nullable',
                'image' => 'image|nullable'
            ]
        );

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section_four', 'public');
        }
        $sectionFour = $this->sectionFourRepo->update($data, $id);
        return redirect()->route('section.four');
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
        return redirect()->route('section.five');
    }

    public function deleteFive($id)
    {
        $sectionFive = $this->sectionFiveRepo->find($id);
        $sectionFive->delete();
        return redirect()->back();
    }

    public function sectionFiveEditView($id)
    {
        $sectionFive = $this->sectionFiveRepo->find($id);
        $title = "Update section Five (Team)";
        return view('admin.editInputs.editsectionfive', compact('sectionFive', 'title'));
    }

    public function updateFive($id, Request $request)
    {
        $sectionfive = $this->sectionFiveRepo->find($id);
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
        $sectionFive = $this->sectionFiveRepo->update($id, $data);
        return redirect()->route('section.five');
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
        return redirect()->route('section.six');
    }

    public function deleteSix($id)
    {
        $sectionSix = $this->sectionSixRepo->find($id);
        $sectionSix->delete();
        return redirect()->back();
    }

    public function sectionSixEditView($id)
    {
        $sectionSix = $this->sectionSixRepo->find($id);
        $title = "Update Section Six (FAQs)";
        return view('admin.editInputs.editsectionsix', compact('sectionSix', 'title'));
    }

    public function updateSix($id, Request $request)
    {
        $sectionsix = $this->sectionSixRepo->find($id);
        $data = $request->validate([
            'question' => 'string|nullable',
            'answer' => 'string|nullable'
        ]);
        $sectionSix = $this->sectionSixRepo->update($id, $data);
        return redirect()->route('section.six');
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
        return redirect()->route('section.seven');
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
        if (!$sectionseven) {
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
        return redirect()->route('section.seven');
    }

    // Section Eight (Developers)
    public function sectionEight()
    {
        $sectionEight = $this->sectionEightRepo->all();
        return view('admin.sections.sectioneight', compact('sectionEight'));
    }

    public function sectionEightCreate()
    {
        $title = 'Create Section Eight (Developer)';
        return view('admin.inputs.sectionEightInput', compact('title'));
    }

    public function sectionEightStore(Request $request)
    {
        $data = $request->validate([
            'developer_id' => 'string',
            'name' => 'string|nullable',
            'role' => 'string|nullable',
            'description' => 'string|nullable',
            'tech1' => 'string|nullable',
            'tech2' => 'string|nullable',
            'tech3' => 'string|nullable',
            'tech4' => 'string|nullable',
            'image' => 'image|nullable'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section_eight', 'public');
        }

        $sectionEight = $this->sectionEightRepo->create($data);
        return redirect()->route('section.eight');
    }

    public function deleteEight($id)
    {
        $this->sectionEightRepo->find($id)->delete($id);
        return redirect()->back();
    }

    public function sectionEightEditView($id)
    {
        $sectionEight = $this->sectionEightRepo->find($id);
        $title = "Update Section Eight (Developer)";
        return view('admin.editInputs.editsectioneight', compact('sectionEight', 'title'));
    }

    public function updateEight($id, Request $request)
    {
        $sectionEight = $this->sectionEightRepo->find($id);
        if (!$sectionEight) {
            return redirect()->back();
        }
        $data = $request->validate(
            [
                'developer_id' => 'string',
                'name' => 'string|nullable',
                'role' => 'string|nullable',
                'description' => 'string|nullable',
                'tech1' => 'string|nullable',
                'tech2' => 'string|nullable',
                'tech3' => 'string|nullable',
                'tech4' => 'string|nullable',
                'image' => 'image|nullable'
            ]
        );

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section_eight', 'public');
        }
        $this->sectionEightRepo->update($id, $data);
        return redirect()->route('section.eight');
    }


    // Section Controller (Developer Portfolio)
    public function sectionNine()
    {
        return view('admin.sections.sectionNine');
    }


    // Developer Education 
    public function viewDeveloperEducationForm()
    {
        $title = "Insert Education Record";
        return view('admin.inputs.developer_education', compact('title'));
    }

    public function viewDeveloperContactForm()
    {
        $title = "Insert Contact Record For Develoepr";
        return view('admin.inputs.developer_contact', compact('title'));
    }

    public function viewDeveloperExperianceForm()
    {
        $title = "Add Developer Experiance";
        return view('admin.inputs.developer_experiance', compact('title'));
    }

    public function viewDeveloperProjectsForm()
    {
        $title = "Add Developer Project";
        return view('admin.inputs.developer_project', compact('title'));
    }
}
