@extends('layouts.master')
@section('title','Remax - Home')
@section('content')
    <div class="video-bg">
        <div class="videoSection">
            <div class="ntnav">
                <nav style="background-color: #14537b8c; height:90px; " class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('img/logo-rwb.svg')}}" alt="Remax logo image">
                        </a>
                        <a href="{{route('first.step')}}" style="border-radius: 0; " class="btn btn-primary">Get
                            Started</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class=" uppertxt container h-100">
            <div class="d-flex text-center h-100">
                <div class="my-auto w-100 text-white">
                    <img width="50" src="http://remax.codicsoft.com/wp-content/uploads/2022/12/logo-balloon.svg" alt="">
                    <h4 class="build m-4">BUILD YOUR BUSINESS</h4>
                    <h4 class="with m-4">WITH RE/MAX</h4>
                    <p class="paragraph">Experience a culture focused on the resources that lift our businesses<br> and
                        each other. Like supportive brokers with relevant field insight.<br> Values that make a
                        difference in our communities. Worldwide exposure<br> and connections with industry experts. And
                        over 140,000 talented <br>agents around the globe who will inspire you to work toward greatness.
                    </p>
                    <a href="{{route('first.step')}}" style="border-radius: 0; z-index: 2;" class="btn btn-primary">Get
                        Started</a>

                </div>
            </div>
        </div>
    </div>
    <video width="100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{asset('img/jr_vid_bg.mp4-vimeo-778597626-hls-akfire_interconnect_quic_sep-4430.mp4')}}"
                type="video/mp4">
    </video>
@endsection
