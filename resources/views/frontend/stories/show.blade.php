@extends('frontend.layouts.master')

@section('intro')
	<h1 class="animation-slideDown"><strong>{{ $story->title }}</strong></h1>
@stop

@section('content')
<!-- Story -->
<article>
    <p>{{ $story->preview }}</p>

    <iframe src="{{ asset('storage/stories-pdf/' . $story->file) }}" style="width:100%; height:1000px;" frameborder="0"></iframe>

</article>
<!-- END Story -->
<hr>
<div class="row">
    <div class="col-md-12 site-block">
        <h3 class="site-heading"><strong>Read</strong> More</h3>
        <ul class="fa-ul ul-breath">
            @foreach ($otherStories as $key => $otherStory)
            <li><i class="fa fa-angle-right fa-li"></i> <a href="{{ route('frontend.story.show', ['slug' => str_slug($otherStory->title), 'id' => $otherStory->id]) }}">{{ $otherStory->title }}</a></li>
            @endforeach
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