@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong>Anime</strong></h1>
    <h2 class="h3 animation-slideUp">Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</h2>
@stop

@section('content')
    @if(0)
        <td colspan="2">List of users is empty!</td>
    @else
        @foreach ($listStories as $key => $story)
            <!-- Blog Post -->
            <div class="site-block">
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => $story -> id]) }}">
                                <img src="{{'img/placeholders/photos/'.$story -> image}}" alt="image" class="img-responsive">
                            </a>
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h3 class="site-heading"><strong>{{$story -> title}}</strong></h3>
                        <p>{{$story -> preview}}[...]</p>
                    </div>
                </div>
                <div class="clearfix">
                    <p class="pull-right">
                        <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => $story -> id]) }}" class="label label-primary">Read more..</a>
                    </p>
                    <ul class="list-inline pull-left">
                        <li><i class="fa fa-calendar"></i> {{$story -> created_at}}</li>
                        <li><i class="fa fa-user"></i> by <a href="javascript:void(0)">User upload it</a></li>
                        <li><i class="fa fa-tag"></i> <a href="javascript:void(0)">{{$category -> name}}</a></li>
                        <li><i class="fa fa-comments"></i> <a href="javascript:void(0)">3 comments</a></li>
                    </ul>
                </div>
            </div>
            <!-- END Blog Post -->
        @endforeach
    @endif

    <!-- Pagination -->
    <div class="text-right">
        <ul class="pagination">
            {{ $listStories->links() }}
        </ul>
    </div>
    <!-- END Pagination -->
@stop