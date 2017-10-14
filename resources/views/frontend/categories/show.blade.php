@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong>Anime</strong></h1>
    <h2 class="h3 animation-slideUp">Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</h2>
@stop

@section('content')
    <!-- Blog Post -->
    <div class="site-block">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}">
                        <img src="img/placeholders/photos/photo1.jpg" alt="image" class="img-responsive">
                    </a>
                </p>
            </div>
            <div class="col-md-8">
                <h3 class="site-heading"><strong>The Mountain Trip</strong></h3>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. [...]</p>
            </div>
        </div>
        <div class="clearfix">
            <p class="pull-right">
                <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}" class="label label-primary">Read more..</a>
            </p>
            <ul class="list-inline pull-left">
                <li><i class="fa fa-calendar"></i> June 10, 2014</li>
                <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">John Doe</a></li>
                <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">Articles</a></li>
                <li><i class="fa fa-comments"></i> <a href="javascript:void(0)">3 comments</a></li>
            </ul>
        </div>
    </div>
    <!-- END Blog Post -->

    <!-- Blog Post -->
    <div class="site-block">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}">
                        <img src="img/placeholders/photos/photo11.jpg" alt="image" class="img-responsive">
                    </a>
                </p>
            </div>
            <div class="col-md-8">
                <h3 class="site-heading"><strong>How to be productive</strong></h3>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. [...]</p>
            </div>
        </div>
        <div class="clearfix">
            <p class="pull-right">
                <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}" class="label label-primary">Read more..</a>
            </p>
            <ul class="list-inline pull-left">
                <li><i class="fa fa-calendar"></i> June 5, 2014</li>
                <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">Ella Parker</a></li>
                <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">Tutorials</a></li>
                <li><i class="fa fa-comments"></i> <a href="javascript:void(0)">4 comments</a></li>
            </ul>
        </div>
    </div>
    <!-- END Blog Post -->

    <!-- Blog Post -->
    <div class="site-block">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}">
                        <img src="img/placeholders/photos/photo9.jpg" alt="image" class="img-responsive">
                    </a>
                </p>
            </div>
            <div class="col-md-8">
                <h3 class="site-heading"><strong>CSS3 &amp; HTML5 Tutorial</strong></h3>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. [...]</p>
            </div>
        </div>
        <div class="clearfix">
            <p class="pull-right">
                <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}" class="label label-primary">Read more..</a>
            </p>
            <ul class="list-inline pull-left">
                <li><i class="fa fa-calendar"></i> June 1, 2014</li>
                <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">Anthony Daniels</a></li>
                <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">Tutorials</a></li>
                <li><i class="fa fa-comments"></i> <a href="javascript:void(0)">15 comments</a></li>
            </ul>
        </div>
    </div>
    <!-- END Blog Post -->

    <!-- Blog Post -->
    <div class="site-block">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}">
                        <img src="img/placeholders/photos/photo16.jpg" alt="image" class="img-responsive">
                    </a>
                </p>
            </div>
            <div class="col-md-8">
                <h3 class="site-heading"><strong>How to push your company forward</strong></h3>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. [...]</p>
            </div>
        </div>
        <div class="clearfix">
            <p class="pull-right">
                <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}" class="label label-primary">Read more..</a>
            </p>
            <ul class="list-inline pull-left">
                <li><i class="fa fa-calendar"></i> May 15, 2014</li>
                <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">Denis Laurian</a></li>
                <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">Articles</a></li>
                <li><i class="fa fa-comments"></i> 5 comments</li>
            </ul>
        </div>
    </div>
    <!-- END Blog Post -->

    <!-- Blog Post -->
    <div class="site-block">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}">
                        <img src="img/placeholders/photos/photo10.jpg" alt="image" class="img-responsive">
                    </a>
                </p>
            </div>
            <div class="col-md-8">
                <h3 class="site-heading"><strong>New updates and more!</strong></h3>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. [...]</p>
            </div>
        </div>
        <div class="clearfix">
            <p class="pull-right">
                <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}" class="label label-primary">Read more..</a>
            </p>
            <ul class="list-inline pull-left">
                <li><i class="fa fa-calendar"></i> May 5, 2014</li>
                <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">Willem Post</a></li>
                <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">Special Offers</a></li>
                <li><i class="fa fa-comments"></i> <a href="javascript:void(0)">10 comments</a></li>
            </ul>
        </div>
    </div>
    <!-- END Blog Post -->

    <!-- Pagination -->
    <div class="text-right">
        <ul class="pagination">
            <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">4</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
    <!-- END Pagination -->
@stop