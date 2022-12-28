@extends('adminPanel.layouts.master')
@section('title','Users - Admin Panel')
@section('style')
    <style>
        .clearfix ul {
            margin-bottom: 0 !important;
        }
    </style>
@endsection
@section('pageHeader')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">User Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Details</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section('content')
    <div class="card p-0">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body p-0">
            <div class="accordion p-4" id="accordionExample">
                @foreach($user_details as $data)
                    <div class="card">
                        <div class="card-header" id="heading{{$data->id}}">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapse{{$data->id}}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    <h3>Name: {{$data->name}}</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse{{$data->id}}" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="introduction">
                                    <h3 class="bg-dark text-light p-2">Introduction</h3>
                                    <div class="row mx-2">
                                        <h5 class="font-weight-bold">Email:</h5>
                                        <h5 class="ml-2">{{$data->email}}</h5>
                                    </div>
                                    <div class="row mx-2">
                                        <h5 class="font-weight-bold">Phone No:</h5>
                                        <h5 class="ml-2">{{$data->phone_no}}</h5>
                                    </div>
                                </div>
                                @if($data->SecondStep)
                                    <div class="are_u_ready">
                                        <h3 class="bg-dark text-light p-2">Are you Ready</h3>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Work with international client :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->international_client}}</h5>
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Learn International Real Estate :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->real_state_experience}}</h5>
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Learn & Grow :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->learning_for_growth}}</h5>
                                        </div>
                                    </div>
                                @endif
                                @if($data->SecondStep && $data->SecondStep->ThirdStep)
                                    <div class="are_u_ready">
                                        <h3 class="bg-dark text-light p-2">About You</h3>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Language :</h5>
                                            @foreach(json_decode($data->SecondStep->ThirdStep->language) as $lang)
                                                <h5 class="ml-2">{{$lang}}</h5>
                                            @endforeach
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Nationality :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->nationality}}</h5>
                                        </div>
                                    </div>
                                @endif
                                @if($data->SecondStep && $data->SecondStep->ThirdStep && $data->SecondStep->ThirdStep->FourthStep)
                                    <div class="are_u_ready">
                                        <h3 class="bg-dark text-light p-2">One Last Step</h3>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Are You Present In UAE :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->present_in_uae}}</h5>
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Which country are you in? :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->country ? $data->SecondStep->ThirdStep->FourthStep->country : 'no data'}}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Visa Status in UAE :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->visa_status}}</h5>
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Visa Expiry Date :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->expiry_date ? $data->SecondStep->ThirdStep->FourthStep->expiry_date : 'no data'}}</h5>
                                        </div>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Visa Anticipated Date :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->anticipated_date ? $data->SecondStep->ThirdStep->FourthStep->anticipated_date : 'no data'}}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Driving License of UAE :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->driving_license}}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Own a Car in UAE :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->own_car ? $data->SecondStep->ThirdStep->FourthStep->own_car : 'no data'}}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Total years of work Experience :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->work_experience}}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Total years of Real Estate Experience :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->real_estate_experience }}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Total years of Dubai Real Estate Experience
                                                :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->dubai_real_estate_experience }}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">Do you have RERA Card :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->rera_card }}</h5>
                                        </div>

                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">RERA Card No :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->rera_card_no }}</h5>
                                        </div>
                                    </div>
                                @endif

                                @if($data->SecondStep && $data->SecondStep->ThirdStep && $data->SecondStep->ThirdStep->FourthStep
                                && $data->SecondStep->ThirdStep->FourthStep->FifthStep)
                                    <div class="last-step">
                                        <h3 class="bg-dark text-light p-2">Fifth Form</h3>
                                        <div class="row mx-2">
                                            <h5 class="font-weight-bold">You confirm that you understand it’s a
                                                commission only role, and you are ready to join the worlds No.1 real
                                                estate brokers network? :</h5>
                                            <h5 class="ml-2">{{$data->SecondStep->ThirdStep->FourthStep->FifthStep->commission_based_role}}</h5>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer clearfix d-flex justify-content-end">
            {{ $user_details->links() }}
        </div>
    </div>
@endsection
