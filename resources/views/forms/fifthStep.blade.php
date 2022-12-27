@extends('layouts.master')
@section('title','First Step')
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
            <form class="card shadow p-5" id="fifth_step" method="POST" action="{{route('fifth.step.post')}}" enctype="multipart/form-data">
                @csrf
                <h1 class="d-flex justify-content-center align-items-center">Fifth Form</h1>
                <div class="form-group">
                    <input type="hidden" name="fourthStep" value="{{request()->data}}">
                    <label for="commission_based_role">You confirm that you understand it’s a commission only role, and you are ready to join the
                        worlds No.1 real estate brokers network?</label>
                    <select name="commission_based_role" id="commission_based_role" class="form-control">
                        <option value="">Please select</option>
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
            $("#fifth_step").validate({
                ignore:[],
                focusInvalid: false,
                rules: {
                    commission_based_role:{
                        required: true,
                    },
                }
            });
        });
    </script>
@endsection
