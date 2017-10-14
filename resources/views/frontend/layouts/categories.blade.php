<ul class="fa-ul ul-breath">
	@foreach ($categories as $key => $category)
    <li><i class="fa fa-angle-right fa-li"></i>
        <a href="{{ route('frontend.category.show', ['slug'=>str_slug($category->name), 'id' => $category->id]) }}">{{ $category->name }}</a>
    </li>
	@endforeach
</ul>