@php
  $currentUser = Auth::user();
@endphp

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if ($currentUser->image)
          <img src="{{$currentUser->image}}" class="img-circle" alt="{{ $currentUser->name }}">
        @else
          <img src="/backend/img/avatar5.png" class="img-circle" alt="{{ $currentUser->name }}">
        @endif
      </div>
      <div class="pull-left info">
        <p>{{ $currentUser->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li  class="@if(request()->url() == route('home')) {{ 'active' }} @endif">
        <a href="{{ route('home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
        <li class="@if(request()->url() == route('form-list.index')) {{ 'active' }} @endif"><a href="{{ route('form-list.index') }}"><i class="fa fa-folder"></i> <span>Entrance Forms</span></a></li>
        <li class="@if(request()->url() == route('result.index')) {{ 'active' }} @endif"><a href="{{ route('result.index') }}"><i class="fa fa-folder"></i> <span>Entrance Result</span></a></li>
        <li class="treeview @if(request()->url() == route('menu.index') || request()->url() == route('faculty.index') || request()->url() == route('user.index') || request()->url() == route('grade.index')) {{ 'active' }} @endif">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('menu.index') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
            <li><a href="{{ route('grade.index') }}"><i class="fa fa-circle-o"></i> Grade</a></li>
            <li><a href="{{ route('faculty.index') }}"><i class="fa fa-circle-o"></i> Faculty</a></li>
            @if ($currentUser->role == "Admin")
              <li><a href="{{ route('user.index') }}"><i class="fa fa-user"></i>Users</a></li>
            @endif
          </ul>
        </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
