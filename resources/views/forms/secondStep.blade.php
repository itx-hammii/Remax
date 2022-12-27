@extends('layouts.master')
@section('title','Second Step')
@section('style')
    <style>
        .error{
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="my-5">
            <h1>Second  From</h1>
            <form class="card shadow p-5" id="second_step" method="POST" action="{{route('second.step.post')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="firstStepEmail" value="{{request()->email}}">
                <div class="form-group">
                    <label for="international_client">Willing to work with International Client</label>
                    <select name="international_client" id="international_client" class="form-control">
                        <option value="">Select Option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form-group" id="real_estate_div" style="display: block">
                    <label for="real_estate">Ready to Learn International Real Estate</label>
                    <select name="real_estate" id="real_estate" class="form-control">
                        <option value="">Select Option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="form-group" id="learn_for_growth_div" style="display: block">
                    <label for="learn_for_growth">Willing to learn for growth</label>
                    <select name="learn_for_growth" id="learn_for_growth" class="form-control" >
                        <option value="">Select Option</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // jquery validation plugIN
            $("#second_step").validate({
                ignore:[],
                focusInvalid: false,
                rules: {
                    international_client:{
                        required: true,
                    },
                    real_estate:{
                        required: true,
                    },
                    learn_for_growth:{
                        required: true,
                    },
                }
            });

        //     show the real estate dropdown page on yes on international client
        //     $(document).on('change','#international_client',function () {
        //         let international_client = $('#international_client').val();
        //         if(international_client == 'yes'){
        //             $('#real_estate_div').css('display','block');
        //         }
        //         if(international_client == 'no'){
        //             $('#real_estate_div').css('display','none');
        //         }
        //     });
            //     show the real estate dropdown page on yes on international client
            // $(document).on('change','#real_estate',function () {
            //     let real_estate = $('#real_estate').val();
            //     if(real_estate == 'yes'){
            //         $('#learn_for_growth_div').css('display','block');
            //     }
            //     if(real_estate == 'no'){
            //         $('#learn_for_growth_div').css('display','none');
            //     }
            // });
        });
    </script>
@endsection
