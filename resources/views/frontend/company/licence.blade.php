@extends('layouts.frontend-master')

@section('content')

    <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/breadcrumb/licence.jpg"><div class="parallax-container img-loaded" data-bg="{{asset('frontend')}}/images/breadcrumb/licence.jpg" data-velocity="-.140" style="background: rgba(0, 0, 0, .50) " data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Recruiting licence</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">licence</li>
                </ul>
            </div>
        </div>
    </section>



@endsection
