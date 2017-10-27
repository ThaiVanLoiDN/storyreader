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
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>How to be more productive</strong></a></h5>
                <small class="text-muted">1 year ago</small>
            </div>
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>CSS3 &amp; HTML5 Tutorial</strong></a></h5>
                <small class="text-muted">6 days ago</small>
            </div>
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar11.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>New updates and more!</strong></a></h5>
                <small class="text-muted">1 month ago</small>
            </div>
        </div>
        <div class="tab-pane" id="posts-recent">
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>How to push your company forward</strong></a></h5>
                <small class="text-muted">1 day ago</small>
            </div>
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar4.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>New updates and more!</strong></a></h5>
                <small class="text-muted">1 week ago</small>
            </div>
            <div class="content-float clearfix">
                <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle pull-left">
                <h5><a href="{{ route('frontend.story.preview', ['slug' => 'a', 'id' => 1]) }}"><strong>How to be more productive</strong></a></h5>
                <small class="text-muted">2 weeks ago</small>
            </div>
        </div>
    </div>
</div>
<!-- END Popular and Recent -->
</aside>