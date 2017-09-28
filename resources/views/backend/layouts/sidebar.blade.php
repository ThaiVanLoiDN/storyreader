<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url('storage/avatars/avatar.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Administrator</p>
            @admin
        </div>
    </div>

    <ul class="sidebar-menu" id="list_pages">

        <li class="{{ Request::is('admin/index*')? 'active' : '' }}">
            <a href="{{ route('home.index') }}">
                <i class="fa fa-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/categories*')? 'active' : '' }}">
            <a href="{{ route('categories.index') }}">
                <i class="fa fa-folder-o"></i> <span>Categories</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/stories*')? 'active' : '' }}">
            <a href="{{ route('stories.index') }}">
                <i class="fa fa-folder-o"></i> <span>Stories</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/users*')? 'active' : '' }}">
            <a href="{{ route('users.index') }}">
                <i class="fa fa-user"></i> <span>Users</span>
            </a>
        </li>
    </ul>
</section>