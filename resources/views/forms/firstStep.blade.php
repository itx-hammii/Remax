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
            <h1>Introduction</h1>
            <form class="card shadow p-5" id="firstStep" method="POST" action="{{route('first.step.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="phone_no">Phone No</label>
                    <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="+97 xxx">
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
            $("#firstStep").validate({
                ignore:[],
                focusInvalid: false,
                rules: {
                    name:{
                        required: true,
                    },
                    email:{
                        required: true,
                        email:true,
                    },
                    phone_no:{
                        required: true,
                    },
                }
            });
        });
    </script>
@endsection
