<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url('storage/avatars/' . Auth::user()->image ) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            @php
                switch (Auth::user()->role) {
                    case '2':
                        echo 'Admin';
                        break;
                    
                    default:
                        echo 'Mod';
                        break;
                }
            @endphp    
        </div>
    </div>

    <ul class="sidebar-menu" id="list_pages">

        <li class="{{ Request::is('manage/categories*')? 'active' : '' }}">
            <a href="{{ route('categories.index') }}">
                <i class="fa fa-folder-o"></i> <span>Categories</span>
            </a>
        </li>
        <li class="{{ Request::is('manage/stories*') || Request::is('manage')? 'active' : '' }}">
            <a href="{{ route('stories.index') }}">
                <i class="fa fa-folder-o"></i> <span>Stories</span>
            </a>
        </li>
        <li class="{{ Request::is('manage/users*')? 'active' : '' }}">
            <a href="{{ route('users.index') }}">
                <i class="fa fa-user"></i> <span>Users</span>
            </a>
        </li>
    </ul>
</section>