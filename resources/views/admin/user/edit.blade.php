@extends('layouts.app')

@section('content')
  
  @include('layouts.sidebar')
  
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      User
      <small>Edit User</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('user.index') }}">User</a>
      </li>
      <li class="active">Edit User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($user, [
          'method' => 'PUT',
          'route' => ['user.update', $user->id],
        ])!!}

        @include('admin.user.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
