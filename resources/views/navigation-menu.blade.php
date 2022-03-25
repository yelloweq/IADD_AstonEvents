<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg sticky-top">
    <div class="container-fluid">

      <a class="navbar-brand" href="{{ route('home') }}">AstonEvents</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedNavbar" aria-controls="collapsedNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsedNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link
                @if (request()->routeIs('home'))
                active
                @endif" href="{{ route('home') }}">{{ __('Home') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link
                @if (request()->routeIs('events'))
                  active
                  @endif" href="{{ route('events') }}">{{ __('Events') }}</a>
              </li>

            @if (Route::has('login'))
              @auth
              <li class="nav-item">
                <a class="nav-link
                @if (request()->routeIs('dashboard'))
                active
                @endif" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
              </li>

              <div class="dropdown">
                <button class="" type="button" id="userprofiledropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </button>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-right py-2 rounded-lg" aria-labelledby="userprofiledropdown">
                  <li class="py-2"><span class="dropdown-header">Manage Account</span></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  <li class="py-1"><a class="dropdown-item py-2" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                  <li class="py-1"><a class="dropdown-item py-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">{{ __('Logout') }}</a></li>
                  </form>
                </ul>
              </div>

              @else
                <li class="nav-item">
                  <a class="nav-link
                  @if (request()->routeIs('login'))
                  active
                  @endif" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link
                  @if (request()->routeIs('register'))
                  active
                  @endif" href="{{ route('register') }}">Register</a>
                </li>
                @endif
              @endauth
            @endif
            </ul>
    </div>

</div>
</nav>