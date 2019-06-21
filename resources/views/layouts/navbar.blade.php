<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>M</b>E</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>MY</b>Entrance</span>
  </a>

  <nav class="navbar navbar-static-top">

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        @guest
          @foreach ($menus as $menu)
            <li class="dropdown user user-menu @if(request()->url() == route($menu->route)){{ 'active' }} @endif">
              <a href="{{ route($menu->route) }}" class="dropdown-toggle @if($menu->status == 0) {{'hidden'}} @endif">
                <span class="hidden-xs">{{ $menu->name }}</span>
              </a>
            </li>
          @endforeach
        @endguest
        @auth
          <li class="dropdown user user-menu">
            <?php $currentUser = Auth::user() ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if ($currentUser->image)
                <img src="{{$currentUser->image}}" class="img-circle" alt="{{ $currentUser->name }}">
              @else
                <img src="/backend/img/avatar5.png" class="user-image" alt="{{ $currentUser->name }}">
              @endif
              <span class="hidden-xs">{{ $currentUser->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if ($currentUser->image)
                  <img src="{{$currentUser->image}}" class="img-circle" alt="{{ $currentUser->name }}">
                @else
                  <img src="/backend/img/avatar5.png" class="img-circle" alt="{{ $currentUser->name }}">
                @endif
                <p>
                  {{ $currentUser->name }} - Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('user.edit', $currentUser->id) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
        @endauth
      </ul>
    </div>
  </nav>
</header>
