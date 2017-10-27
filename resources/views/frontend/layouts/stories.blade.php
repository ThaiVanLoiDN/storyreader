@foreach ($stories as $key => $story)
	
<div class="content-float clearfix">
    <img src="{{ asset('storage/stories/' . $story->image) }}" alt="{{ $story -> title }}" class="img-circle pull-left">
    <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => $story -> id]) }}"><strong>{{ $story -> title }}</strong></a></h5>
    <small class="text-muted">{{ date('M d, Y', strtotime($story->created_at)) }}</small>
</div>
@endforeach