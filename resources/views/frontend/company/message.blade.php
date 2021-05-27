@extends('layouts.frontend-master')

@section('content')
   <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/breadcrumb/dairy-pen.jpg"><div class="parallax-container img-loaded" data-bg="{{asset('frontend')}}/images/breadcrumb/dairy-pen.jpg" data-velocity="-.140" style="background: rgba(0, 0, 0, 0) url({{asset('frontend')}}/images/parallax/dairy-pen.jpg) repeat scroll 0% 0px;" data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Messages</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">Message</li>
                </ul>
            </div>
        </div>
    </section>

   <section>
       <div class="container">
           <div class="row team-members team-members-shadow ">
               <div class="col-12">
                   <div class="row">
                       <div class="col-lg-5 message">
                           <div class="team-member">
                               <div class="team-image">
                                   <img src="{{asset('frontend')}}/images/about/md-sir-frame.jpg">
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-3">
                   <div class="heading-text heading-section">
                       <h2>
                           MESSAGE FROM OWNER
                       </h2>
                   </div>
               </div>
               <div class="col-lg-9">
                   <div class="row">
                       <div class="col-lg-12">I take this opportunity to introduce our Agency by the name of NARCISSUS as an experienced, modern, efficient & front line overseas recruiting agency in Bangladesh. Our earnestness and ardent services blended with highest standard of professionalism has earned us much sought after global appreciation, trust and poise. Densely populated Bangladesh possesses the immense possibility to help in developing the economic structure of those countries who are acutely suffering from shortage of right workforce.  <br> <br> Since our independence till today we have acrossed a long trek but we are yet to reach our goal. Let us make our life and country prosperous by our ultimate efforts keeping the view to present a good generation to the country. Let us take the oath to take care of the child and youth as because they are the future of the nation and they shall hold the mast of the country in the near future. </div>

                   </div>
               </div>
           </div>
       </div>

   </section>


@endsection
