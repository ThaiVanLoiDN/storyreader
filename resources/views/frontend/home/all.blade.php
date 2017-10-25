@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong>All the stories</strong></h1>
    <h2 class="h3 animation-slideUp">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut!</h2>
@stop

@section('content')
    
    @foreach ($stories as $key => $story)
        
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
                <h3 class="site-heading"><strong>{{ $story->title }}</strong></h3>
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
    @endforeach

    <!-- Pagination -->
    <div class="text-right">
        {{ $stories->links() }}
    </div>
    <!-- END Pagination -->
@stop