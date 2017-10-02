@include('frontend.layouts.header')
@include('frontend.layouts.menu')

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        @yield('intro')
    </div>
</section>
<!-- END Intro -->

<!-- Content -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <!-- Posts -->
            <div class="col-sm-8 col-md-9">
                @yield('content')	
            </div>
            <!-- END Posts -->

            <!-- Sidebar -->
            <div class="col-sm-4 col-md-3">
                @include('frontend.layouts.sidebar')
            </div>
            <!-- END Sidebar -->
        </div>
    </div>
</section>
<!-- END Content -->
@include('frontend.layouts.footer')