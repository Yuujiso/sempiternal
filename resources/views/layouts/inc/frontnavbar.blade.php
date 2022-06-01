<!-- -------------------------------------- {TOP} -------------------------------------- -->

<div class="top-container">
    <div style="position: relative;">
        <h3><dfn>Outer beauty pleases the eye. Inner beauty captivates the heart.</dfn></h3>
    </div>
    <div class="header-search__wrapper">
        <div class="header-search">
            <button id="show-search" class="btn search-btn" aria-label="Search"></button>
        </div>
    </div>
</div>

        <!-- -------------------------------------- {NAVI} -------------------------------------- -->

<div class="header" id="stickMan">
    <div class="topnav">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/gif.gif/') }} " alt="loto"></a>
        <a href="{{ url('cart') }}">Cart</a>
        @guest
            @if (Route::has('login'))
                <a id="show-login" href="{{ route('login') }}">{{ ('Login') }}</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}">{{ ('Register') }}</a>
            @endif
        @else
            <a>{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none">
                @csrf

        @endguest
    </div>
</div>




