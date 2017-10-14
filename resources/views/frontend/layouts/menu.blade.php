<!-- Site Header -->
<header>
    <div class="container">
        <!-- Site Logo -->
        <a href="{{ route('frontend.home.index') }}" class="site-logo">
            <i class="gi gi-flash"></i> <strong>Story</strong>Reader
        </a>
        <!-- Site Logo -->

        <!-- Site Navigation -->
        <nav>
            <!-- Menu Toggle -->
            <!-- Toggles menu on small screens -->
            <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                <i class="fa fa-bars"></i>
            </a>
            <!-- END Menu Toggle -->

            <!-- Main Menu -->
            <ul class="site-nav">
                <!-- Toggles menu on small screens -->
                <li class="visible-xs visible-sm">
                    <a href="javascript:void(0)" class="site-menu-toggle text-center">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
                <!-- END Menu Toggle -->
                <li>
                    <a href="{{ route('frontend.home.all') }}">All the story</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Categories</a>
                    {!! ListCategory::list() !!}
                </li>
            </ul>
            <!-- END Main Menu -->
        </nav>
        <!-- END Site Navigation -->
    </div>
</header>
<!-- END Site Header -->