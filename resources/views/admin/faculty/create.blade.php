@extends('layouts.app')

@section('content')

  @include('layouts.sidebar')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Menu
        <small>Display All Faculty</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="{{ route('menu.index') }}">Faculty</a>
        </li>
        <li class="active">Add new faculty</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          {!! Form::model($faculty, [
            'method' => 'POST',
            'route' => 'faculty.store',
          ])!!}

          @include('admin.faculty.form')

          {!! Form::close() !!}
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
