@extends('layouts.frontend-master')

@section('content')
    <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/breadcrumb/deploy.jpg"><div class="parallax-container img-loaded" data-bg="{{asset('frontend')}}/images/breadcrumb/deploy.jpg" data-velocity="-.140" style="background: rgba(0, 0, 0, .50) " data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Deployment Status</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">Performance</li>
                </ul>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="heading-text heading-section text-center workforce">
                <h2>
                    DEPLOYMENT STATUS
                </h2>
                <p style="text-align: center"> This feature is coming soon...
                </p>
            </div>
        </div>
    </section>



@endsection
