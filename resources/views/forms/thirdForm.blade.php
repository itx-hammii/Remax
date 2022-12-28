@extends('layouts.master')
@section('title','Third Step')
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
            <h1>About You</h1>
            <form class="card shadow p-5" id="third_step" method="POST" action="{{route('third.step.post')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="secondStepId" value="{{request()->firstStep}}">
                <div class="form-group">
                    <label for="language">Language (Upto 3 languages)</label>
                    <select name="language[]" id="language" class="form-control" multiple>
                        <option value="">Select your language</option>
                        @foreach($language as $value)
                            <option value="{{$value->language}}">{{$value->language}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <select name="nationality" id="nationality" class="form-control">
                        <option value="">Select your nationality</option>
                        @foreach($nationality as $data)
                            <option value="{{$data->nationality}}">{{$data->nationality}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // jquery validation plugIN
            $("#third_step").validate({
                ignore:[],
                focusInvalid: false,
                rules: {
                    language:{
                        required: true,
                    },
                    nationality:{
                        required: true,
                    }
                }
            });
        });
    </script>
@endsection
