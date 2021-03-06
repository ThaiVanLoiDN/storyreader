<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Story-Reader</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main stylesheet -->
    <link href="{{ asset('css/hallooou.css') }}" rel="stylesheet">

    <!-- Plugin stylesheets -->
    <link href="{{ asset('css/plugins/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jquery.mb.YTPlayer.min.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/searchBox.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script>
        document.createElement('video');
      </script>
    <![endif]-->

</head>

<body id="home">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header pull-left">
                <a class="navbar-brand page-scroll" href="{{ route('frontend.home.all') }}">
                    <!-- replace with your brand logo/text -->
                    <span class="brand-logo">
                        <img src="{{ asset('images/logo2.png') }}" onerror="this.src='{{ asset('images/logo2.png') }}'; this.onerror=null;" alt="All the stories" title="All the stories" class="img-responsive">
                    </span>
                </a>
            </div>
            <div class="main-nav pull-right">
                <div class="button_container toggle">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
            </div>
            <div class="overlay" id="overlay">
                <nav class="overlay-menu">
                    <ul>
                        <li>
                            <a href="{{ route('frontend.home.all') }}">All the story</a>
                        </li>
                        @foreach ($categories as $key => $category)
                            
                        <li>
                            <a href="{{ route('frontend.category.show', ['slug'=>str_slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /.container -->
    </nav>



    <!-- Intro Header -->
    <!-- Full Page Image Background Carousel Header -->
    <header id="intro-carousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!-- /.item active (default)-->
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('{{ asset('images/cover-one.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h1 class="wow animated slideInDown">Everything you want to read
                        <span class="highlight">are here</span>
                    </h1>
                    <p class="intro-text wow animated slideInUp">Let's Search and enjoy!!!</p>
                    <form action="{{ route('frontend.search.search') }}" method="get">
                        <input class="button" placeholder="Search..." name="title" />
                    </form>
                    <br>
                    <br>
                    <a href="{{ route('frontend.home.all') }}" style="font-size: 30px; font-weight: bold; font-style: italic;">You don't know what to read! Click here and let's us help you!!!</a>
                </div>
                <div class="overlay-detail"> </div>
            </div>
            <!-- /.item -->        
        </div>
        <!-- Controls -->
    </header>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/plugins/additional-methods.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoVKfEihX__NdMwdDysA6Vve6PE9Ierj4"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>