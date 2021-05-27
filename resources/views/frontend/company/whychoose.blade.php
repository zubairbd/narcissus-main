@extends('layouts.frontend-master')

@section('content')
    <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/breadcrumb/ksa.jpeg"><div class="parallax-container img-loaded" data-bg="{{asset('frontend')}}/images/breadcrumb/ksa.jpeg" data-velocity="-.140" style="background: rgba(0, 0, 0, 0) url({{asset('frontend')}}/images/breadcrumb/ksa.jpeg) repeat scroll 0% 0px;" data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Why Choose Narcissus</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">Why Choose</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row m-b-50">
                        <div class="col-lg-12">
                            <div class="heading-text whychoose heading-section ">
                                <h2>Why Choose Narcissus</h2>
                            </div>
                            <div class="whychoose-content">
                            In today's rapidly changing business climate, the efficient and effective organization wins, and that means having people who fit your needs perfectly, when you need them. Whether you need to staff a single facility or support a multi-location national operation with uniquely skilled, semi-skilled or unskilled people, Narcissus has recruitment and staffing services to help you meet your goals.
                        </div>

                    </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="heading-text whychoose heading-section ">
                                <h2>Advantages Over Other staffing Services</h2>
                            </div>
<div class="whychoose-content">
                            Specialized divisions & subsidiaries - Specialized recruiters in each of our industry specific divisions & subsidiaries know the unique skills and requirements of each industry and where to locate the best people in that field.
                            <br> <br>
                            Quick response time - Because we are constantly recruiting people, we have a database of qualified candidates ready to go to work.  Right after selection, we post all the details of candidates in our online database so that our clients remain constantly updated regarding the progress in terms of medical fitness, flight and deployment schedules etc.
<br>
<br>
                            Carefully screened, qualified candidates - Our comprehensive recruiting, screening and testing process means you get qualified candidates with the skills to fit perfectly into their positions.
</div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wychoose-photo">
                        <img src="{{asset('frontend')}}/images/about/whychoose.png">
                        <img src="{{asset('frontend')}}/images/about/pre-selection.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--
    <section class="background-grey container-fluid">
        <div class="container">
            <div class="row m-b-60">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 text-center">
<span class="pie-chart" data-percent="75" data-width="4">
<span class="percent" style="width: 160px; height: 160px; line-height: 160px;">75</span>
<canvas height="160" width="160"></canvas></span>
                            <h4>SKILLS</h4>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Condimentum porttitor cursumus.</p>
                        </div>
                        <div class="col-lg-3 text-center">
                            <div class="pie-chart" data-percent="65" data-color="#EA4C89" data-width="4">
                                <span class="percent" style="width: 160px; height: 160px; line-height: 160px;">65</span>
                                <canvas height="160" width="160"></canvas></div>
                            <h4>CONTENT</h4>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum cursumus.</p>
                        </div>
                        <div class="col-lg-3 text-center">
                            <div class="pie-chart" data-percent="35" data-color="#FF675B" data-width="4">
                                <span class="percent" style="width: 160px; height: 160px; line-height: 160px;">35</span>
                                <canvas height="160" width="160"></canvas></div>
                            <h4>WEB SITES</h4>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor.</p>
                        </div>
                        <div class="col-lg-3 text-center">
                            <div class="pie-chart" data-percent="44" data-color="#FF9900" data-width="4">
                                <span class="percent" style="width: 160px; height: 160px; line-height: 160px;">44</span>
                                <canvas height="160" width="160"></canvas></div>
                            <h4>EMPLOYEES</h4>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-t-40">
                    <h1>Objective</h1>
                    <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
                        <br>
                        <br>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volut.</p>
                </div>
            </div>
        </div>
    </section>
-->

    </div>
@endsection
