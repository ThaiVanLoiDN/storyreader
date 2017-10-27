@include('backend.layouts.header')

<header class="main-header">

    <a href="{{ route('home.index') }}" class="logo">
        <span class="logo-mini">
        	<b>
        		@php
	                switch (Auth::user()->role) {
	                    case '2':
	                        echo 'A';
	                        break;
	                    
	                    default:
	                        echo 'M';
	                        break;
	                }
	            @endphp 
        	</b>
        </span>
        <span class="logo-lg">
        	<b>
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
        	</b>
    	</span>    
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        @include('backend.layouts.menu')
    </nav>

</header>

<aside class="main-sidebar">
    @include('backend.layouts.sidebar')
</aside>

@yield('content')

@include('backend.layouts.footer')