@extends('layouts.master')
@section('title','Remax - Welcome')
@section('content')
    <div class=" w-100 h-100 d-flex justify-content-center" style="background-color: #0C2F57">
        <video class="video-div" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset('img/Welcome.mp4')}}" type="video/mp4">
        </video>
    </div>

@endsection
