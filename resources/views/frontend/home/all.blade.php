@extends('frontend.layouts.master')

@section('intro')
    <h1 class="animation-slideDown"><strong>All the stories</strong></h1>
@stop

@section('content')
    
    @foreach ($stories as $key => $story)
        <!-- Blog Post -->
        <div class="site-block">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => $story -> id]) }}">
                            <img src="{{ asset('storage/stories/' . $story->image) }}" alt="image" class="img-responsive">
                        </a>
                    </p>
                </div>
                <div class="col-md-8">
                    <h3 class="site-heading"><strong>{{ $story -> title }}</strong></h3>
                    <p>{{ $story -> preview }}[...]</p>
                </div>
            </div>
            <div class="clearfix">
                <p class="pull-right">
                    <a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => $story -> id]) }}" class="label label-primary">Read more..</a>
                </p>
                <ul class="list-inline pull-left">
                    <li><i class="fa fa-calendar"></i> {{ date('M d, Y', strtotime($story->created_at)) }}</li>
                    <li><i class="fa fa-tag"></i> <a href="{{ route('frontend.category.show', ['slug' => str_slug($story->categories->name), 'id' => $story->category_id]) }}">{{ $story->categories->name }}</a></li>
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