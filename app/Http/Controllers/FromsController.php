<?php

namespace App\Http\Controllers;

use App\Http\Requests\FirstStep as FirstStepRequest;
use App\Http\Requests\FourthStepFromRequest;
use App\Http\Requests\SecondStepFromRequest;
use App\Http\Requests\ThirdStepFromRequest;
use App\Models\FifthFrom;
use App\Models\fourthStep;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\SecondStep;
use App\Models\thirdStep;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\FirstStep;
use Illuminate\Support\Facades\Artisan;

class FromsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('forms.firstStep');
    }

    public function ThankYou()
    {
        return view('thankYou');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FirstStep $request
     * @return RedirectResponse
     */
    public function store(FirstStepRequest $request)
    {
    //    dd($request->all());
        $first_step = new FirstStep();
        $first_step->name = $request->name;
        $first_step->email = $request->email;
        $first_step->phone_no = $request->phone_no;
        $first_step->save();
        return redirect()->route('second.step',['email'=>$request->email]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $first = FirstStep::where('id',$id)->first();
        if(!$first){
            flash('could not found record')->warning();
            return redirect()->back();
        }
        $second='';$third='';$fourth='';$fifth='';
        if($first){
            $second = SecondStep::where('firstStepId',$first->id)->first();
        }
        if($second){
            $third = thirdStep::where('SecondStepId',$second->id)->first();
        }
        if($third){
            $fourth = fourthStep::where('ThirdStepId',$third->id)->first();
        }
        if($fourth){
            $fifth = FifthFrom::where('fourthStepId',$fourth->id)->first();
        }
//        dd($first,$second,$third,$fourth,$fifth);
        if($fifth){
            $fifth->delete();
        }
        if($fourth){
            $fourth->delete();
        }
        if($third){
            $third->delete();
        }
        if($second){
            $second->delete();
        }
        if($first){
            $first->delete();
        }
        flash('User data deleted successfully')->success();
        return redirect()->back();
    }

    /**
     * @return Application|Factory|View
     * displays the second step form
     */
    public function SecondStepFrom()
    {
        return view('forms.secondStep');
    }

    /**
     * @param SecondStepFromRequest $request
     * @return RedirectResponse
     *
     * saves data of second form to DB
     */
    public function SecondStepDataStore(SecondStepFromRequest $request)
    {
//        dd($request->all());
        $second_step = new SecondStep();
        $firstStep = FirstStep::where('email',$request->firstStepEmail)->first();
        $second_step->firstStepId = $firstStep->id;
        $second_step->international_client = $request->international_client;
        $second_step->real_state_experience = $request->real_estate;
        $second_step->learning_for_growth = $request->learn_for_growth;
        $second_step->save();
        if($request->international_client == 'no' || $request->real_estate == 'no' || $request->learn_for_growth == 'no'){
            return redirect()->route('thank.you');
        }
        return redirect()->route('third.step',['firstStep'=>encrypt($firstStep->id)]);
    }

    /**
     * @return Application|Factory|View
     * displays the third form
     */
    public function ThirdStepFrom()
    {
        $language = Language::all();
        $nationality = Nationality::all();
        return view('forms.thirdForm',compact('nationality','language'));
    }

    /**
     * @param ThirdStepFromRequest $request
     * @return RedirectResponse
     * Save data of third form to Db
     */
    public function ThirdStepDataStore(ThirdStepFromRequest $request)
    {
//        dd($request->all());
        $third_step = new thirdStep();
        $data = decrypt($request->secondStepId);
        $secondStep = SecondStep::where('firstStepId',$data)->first();
        $third_step->SecondStepId = $secondStep->id;
        $third_step->language = json_encode($request->language);
        $third_step->nationality = $request->nationality;
        $third_step->save();
        return redirect()->route('fourth.step',['data'=>encrypt($secondStep->id)]);
    }

    /**
     * @return Application|Factory|View
     * displays the fourth form
     */
    public function FourthStepFrom()
    {
        $nationality = Nationality::all();
        return view('forms.fourthStep',compact('nationality'));
    }

    /**
     * @param FourthStepFromRequest $request
     * @return RedirectResponse
     *
     * saves the data of fourth form
     */
    public function FourthStepDataStore(FourthStepFromRequest $request)
    {
    //    dd($request->all());
        $data = decrypt($request->thirdStep);
        $fourth_step = new fourthStep();
        $third_step = thirdStep::where('secondStepId',$data)->first();
        $fourth_step->thirdStepId = $third_step->id;
        $fourth_step->present_in_uae = $request->present_in_uae;
        $fourth_step->country = $request->country ? $request->country : null;
        $fourth_step->visa_status = $request->visa_status;
        $fourth_step->expiry_date = $request->expiry_date ? $request->expiry_date : null;
        $fourth_step->anticipated_date = $request->anticipated_date ? $request->anticipated_date : null;
        $fourth_step->driving_license = $request->driving_license;
        $fourth_step->own_car = $request->own_car ? $request->own_car : null;
        $fourth_step->work_experience = $request->work_experience;
        $fourth_step->real_estate_experience = $request->real_estate_experience;
        $fourth_step->dubai_real_estate_experience = $request->dubai_real_estate_experience;
        $fourth_step->rera_card = $request->rera_card ? $request->rera_card : null;
        $fourth_step->rera_card_no = $request->rera_card_no ? $request->rera_card_no : null;
        $fourth_step->save();
        if($request->present_in_uae == 'no' || $request->driving_license == 'no' ||$request->own_car == 'no' || $request->work_experience== 0 ||
        $request->real_estate_experience == 0 || $request->dubai_real_estate_experience == 0){
        return redirect()->route('thank.you');
        }
        return redirect()->route('fifth.step',['data'=>encrypt($third_step->id)]);

    }

    /**
     * @return Application|Factory|View
     * DISPLAYS THE fifth form data
     */
    public function FifthStepForm()
    {
        return view('forms.fifthStep');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     *
     * saves fifth form data to DB
     */
    public function FifthStepDataSave(Request $request)
    {
//        dd($request->all());
        $value = decrypt($request->fourthStep);
        $fourth_step = fourthStep::where('ThirdStepId',$value)->first();
        $fifth_step = new FifthFrom();
        $fifth_step->fourthStepId = $fourth_step->id;
        $fifth_step->commission_based_role = $request->commission_based_role;
        $fifth_step->save();
        return redirect()->route('welcome');

    }


    /**
     * @return Application|Factory|View
     * displays user details on admin side
     */
    public function DisplayDataAdmin()
    {
        $user_details = FirstStep::with('SecondStep.ThirdStep.FourthStep.FifthStep')->simplePaginate(10);
        return view('adminPanel.pages.Users.index',compact('user_details'));
    }


    /**
     * @return void
     *
     * clears the application cache
     */
    public function DisplayData()
    {
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
    }
}
