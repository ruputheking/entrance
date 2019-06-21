@extends('layouts.app')

@section('content')

  @include('layouts.sidebar')

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Menu
      <small>Edit Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('menu.index') }}">Menu</a>
      </li>
      <li class="active">Edit Menu</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($menu, [
          'method' => 'PUT',
          'route' => ['menu.update', $menu->id],
          'id' => 'menu-form'
        ])!!}

        @include('admin.menu.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
