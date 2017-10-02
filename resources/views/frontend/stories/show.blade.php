@extends('frontend.layouts.master')

@section('intro')
	<h1 class="animation-slideDown"><strong>Latest News</strong></h1>
	<h2 class="h3 animation-slideUp">Learn about our progress and offers!</h2>
@stop

@section('content')
<!-- Story -->
<article>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
    <p>Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>









</article>
    <embed src="{{ asset('storage/stories-pdf/story_1.pdf') }}" type="application/pdf" width="100%" height="100%">
<!-- END Story -->
<hr>
<div class="row">
	<div class="col-md-6 site-block">
        <h3 class="site-heading"><strong>About</strong> the Author</h3>
        <ul class="media-list">
            <li class="media">
                <a href="javascript:void(0)" class="pull-left">
                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle">
                </a>
                <div class="media-body">
                    <a href="javascript:void(0)"><strong>John</strong> Doe</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="col-md-6 site-block">
        <h3 class="site-heading"><strong>Read</strong> More</h3>
        <ul class="fa-ul ul-breath">
            <li><i class="fa fa-angle-right fa-li"></i> <a href="javascript:void(0)">Best trip of my life</a></li>
            <li><i class="fa fa-angle-right fa-li"></i> <a href="javascript:void(0)">Travelling by train across the country</a></li>
            <li><i class="fa fa-angle-right fa-li"></i> <a href="javascript:void(0)">My next big trip</a></li>
            <li><i class="fa fa-angle-right fa-li"></i> <a href="javascript:void(0)">I would like to travel more</a></li>
        </ul>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-12 site-block">
        <h3>Comment</h3>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId={{ env('FACEBOOK_APP_ID') }}";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class="fb-comments" data-href="{{ route('frontend.story.show', ['slug' => 'a', 'id' => 1]) }}" data-width="100%" data-numposts="5"></div>
    </div>
</div>
@stop