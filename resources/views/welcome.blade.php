@extends('layouts.master')
@section('title', 'Remax - Welcome')
@section('content')
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '539044227942920');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=539044227942920&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <div class=" w-100 h-100 d-flex justify-content-center" style="background-color: #0C2F57">
        <video class="video-div" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('img/Welcome.mp4') }}" type="video/mp4">
        </video>
    </div>

@endsection
