@extends('layouts.frontend-master')

@section('content')
    <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/breadcrumb/recruitment.jpg"><div class="parallax-container img-loaded" data-bg="{{asset('frontend')}}/images/breadcrumb/recruitment.jpg" data-velocity="-.140" style="background: rgba(0, 0, 0, 0) url({{asset('frontend')}}/images/breadcrumb/recruitment.jpg) repeat scroll 0% 0px;" data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Recruitment Policy</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">Recruitment</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>RECRUITMENT POLICY</h2>
                <p>On receipt of Demand Letter, Power of Attorney and other necessary documents we shall do an advertise in the local news paper, to locate the most suitable and experienced personnel from the application, Bio- Data we scrutinize these and select the best possible candidates strictly in accordance with the requirements of our principle.For our further satisfaction about the merit of the prospective candidates, after scrutinize these and select the best possible candidates for interviews and practical Trade Test to appear before our selection committee which is composed of experts for that particular experience. Those experts hold detail interview followed by practical test.
<br>
<br>
                    After final selection, those who are selected or nominated for a foreign employment we send them for medical examination. We deploy physically and mentally fit in all respects, suitable for employment in foreign countries. We furnish our medical examination reports duly signed by the examining doctors for each candidate. On completion of all the foregoing formalities we provide the standard foreign employment agreement approved by our principle for signature by the candidates..
<br>
<br>
                    On receipt of stamped visa of selected candidates, we shall book their seats on the first available flight and send Fax/E-mail to the principal advising them the date and flight number by which the candidates shall be flying to their zone or sector.</p>
            </div>

        </div>
    </section>

@endsection
