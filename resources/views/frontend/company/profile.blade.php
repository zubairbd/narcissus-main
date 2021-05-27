@extends('layouts.frontend-master')

@section('content')
   <section id="page-title" class="text-light" data-bg-parallax="{{asset('frontend')}}/images/parallax/5.jpg"><div class="parallax-container img-loaded" data-bg="images/parallax/6.jpg" data-velocity="-.140" style="background: rgba(0, 0, 0, 0) url({{asset('frontend')}}/images/parallax/5.jpg) repeat scroll 0% 0px;" data-ll-status="loaded"></div>
        <div class="container">
            <div class="page-title">
                <h1>Profile</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('index')}}">Home</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li><a href="#">About Us</a><i class="fas fa-chevron-right breadcrumb-kazi"></i>
                    </li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
    </section>

   <section>
       <div class="container">

{{--           <div class="heading-text heading-line text-center">--}}
{{--               <h4>Team members - Left</h4>--}}
{{--           </div>--}}
           <div class="row team-members team-members-left team-members-shadow m-b-40">
               <div class="col-lg-12">
                   <div class="team-member">
                       <div class="team-image">
                           <img src="{{asset('frontend')}}/images/about/md-sir-frame.jpg">
                       </div>
                       <div class="team-desc">
                           <p>A self made business personality who is also Owner & CEO of Narcissus Group, the parent organization of Narcissus. As Owner & CEO of Narcissus Group he is providing leadership to five more subsidiary companies of the Group besides GLO. As an expert in human resource procurement, Mr. Mohammed Nasir Uddin has made his mark in the manpower export sector of Bangladesh. He has developed a comprehensive recruiting chain which covers selection of workers, their medical test and required skill training in appropriate concerns of Narcissus Group. He received a number of awards as recognitions of his contribution to the nation by securing employment for Bangladeshi workers abroad. </p>
                           <h3>Mohammed Nasir Uddin</h3>
                           <span class="designation">Owner & CEO</span>

                           <div class="align-center">
                               <a class="btn btn-xs btn-slide btn-light" href="#">
                                   <i class="fab fa-facebook-f"></i>
                                   <span>Facebook</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                   <i class="fab fa-twitter"></i>
                                   <span>Twitter</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                   <i class="fab fa-instagram"></i>
                                   <span>Instagram</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                   <i class="fas fa-envelope"></i>
                                   <span>Mail</span></a>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-12">
                   <div class="team-member">
                       <div class="team-image team-image-right">
                           <img src="{{asset('frontend')}}/images/about/no-images.jpg">
                       </div>
                       <div class="team-desc">
                           <p>A very successful business personality who has 40 years of overseas experience in human resource procurement. With a higher end education in business management Mr. Abdul Kabir has also expertise in real estate sector and hospitality management. Mr. Abdul Kabir is a thoroughly professional businessman who combines his business acumen with the market reality to secure the best result from the existing situation. As the Chairman of Narcissus Group, he always attaches top most priority in selection of workers who are physically fit in all respects for employment abroad. </p>
                           <h3>Mohammed Abdul Kabir</h3>
                           <span class="designation">Chairman</span>

                           <div class="align-center">
                               <a class="btn btn-xs btn-slide btn-light" href="#">
                                   <i class="fab fa-facebook-f"></i>
                                   <span>Facebook</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                   <i class="fab fa-twitter"></i>
                                   <span>Twitter</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                   <i class="fab fa-instagram"></i>
                                   <span>Instagram</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                   <i class="fas fa-envelope"></i>
                                   <span>Mail</span></a>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-12">
                   <div class="team-member">
                       <div class="team-image">
                           <img src="{{asset('frontend')}}/images/about/no-images.jpg">
                       </div>
                       <div class="team-desc">
                           <p>As Director (Recruitment) of Narcissus Mr. Md Delowar Hossain (Rashed) has been leading the organization from the front for over last two decades. His thorough professional approach and brilliant direction Narcissus has been able to carve out a niche for itself in the growing overseas employment sector of the country. His dedicated service to the organization brought him best employee award of the organization. His professional expertize extends beyond manpower sector of travel and tour operation sector as well. </p>
                           <h3>Md. Delowar Hossain (Rashed)</h3>
                           <span class="designation"> Director (Recruitment)</span>

                           <div class="align-center">
                               <a class="btn btn-xs btn-slide btn-light" href="#">
                                   <i class="fab fa-facebook-f"></i>
                                   <span>Facebook</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                   <i class="fab fa-twitter"></i>
                                   <span>Twitter</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                   <i class="fab fa-instagram"></i>
                                   <span>Instagram</span></a>
                               <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                   <i class="fas fa-envelope"></i>
                                   <span>Mail</span></a>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

       </div>
   </section>

@endsection
