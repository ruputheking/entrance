@extends('layouts.app')

@section('content')
  
  @include('layouts.sidebar')
  
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Users
        <small>Display All Users</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="{{ route('user.index') }}">Users</a>
        </li>
        <li class="active">Add new</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          {!! Form::model($user, [
            'method' => 'POST',
            'route' => 'user.store',
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
