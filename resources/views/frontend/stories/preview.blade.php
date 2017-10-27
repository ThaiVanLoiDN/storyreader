@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong>{{ $story->title }}</strong></h1>
@stop

@section('content')
    <div class="col-sm-12 site-block">
        <h3 class="site-heading">Description</h3>
        <div id="project-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner text-center">
                <div class="active item">
                    <img src="{{ asset('storage/stories/' . $story->image) }}" alt="{{ $story->title }}" width="100%">
                </div>
            </div>
            <a class="left carousel-control" href="#project-carousel" data-slide="prev"></a>
           
            <!-- END Controls -->
        </div>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td style="width: 50%;"><strong>Author</strong></td>
                    <td class="text-right">{{ $story->author }}</td>
                </tr>
                <tr>
                    <td><strong>Category</strong></td>
                    <td class="text-right">{{ $story->categories->name }}</td>
                </tr>
                <tr>
                    <td><strong>Date upload</strong></td>
                    <td class="text-right">{{ date('M d, Y', strtotime($story->created_at)) }}</td>
                </tr>
            </tbody>
        </table>
        <p>{{ $story->preview }}</p>
        <a href="{{ route('frontend.story.show', ['slug' => str_slug($story->title), 'id' => $story->id]) }}" class="btn btn-info">Read more</a>

        <hr>
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
@stop