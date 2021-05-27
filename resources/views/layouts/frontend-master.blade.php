<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Narcissus | Home of total recruitment solution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('frontend')}}/css/plugins.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/styles.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/custom.css" rel="stylesheet">
</head>
<body>

<div class="body-inner">

    <div id="topbar" class="d-none hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="top-menu">
                        <li><a href="#">Phone: +1 (234) 567-890</a></li>
                        <li><a href="#">Email: contact@inspiro-media.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-sm-block">
                    <div class="social-icons social-icons-colored-hover">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.include.header')


    @yield('content')


    @include('frontend.include.footer')

</div>


<a id="scrollTop"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></a>

<script src="{{asset('frontend')}}/js/jquery.js"></script>
<script src="{{asset('frontend')}}/js/plugins.js"></script>

<script src="{{asset('frontend')}}/js/functions.js"></script>
</body>
</html>
