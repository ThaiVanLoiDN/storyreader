<aside class="sidebar site-block">
<!-- Search -->
<div class="sidebar-block">
    <form action="{{ route('frontend.search.search') }}" method="get">
        <div class="input-group">
            <input type="text" id="title" name="title" class="form-control" placeholder="Search..">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
</div>
<!-- END Search -->

<!-- Categories -->
<div class="sidebar-block">
    <h4 class="site-heading">Categories</h4>
    {!! ListCategory::showList() !!}
</div>
<!-- END Categories -->

<!-- Popular and Recent -->
<div class="sidebar-block">
    <h4 class="site-heading"><strong>Best</strong> Stories</h4>
    <ul class="nav nav-tabs push-bit" data-toggle="tabs">
        <li class="active"><a href="#posts-popular"><i class="fa fa-trophy"></i> Hot Stories</a></li>
        <li><a href="#posts-recent"><i class="fa fa-clock-o"></i> New Stories</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="posts-popular">
            {!! ListStory::showHotStories() !!}
        </div>
        <div class="tab-pane" id="posts-recent">
            {!! ListStory::showNewStories() !!}
        </div>
    </div>
</div>
<!-- END Popular and Recent -->
</aside>