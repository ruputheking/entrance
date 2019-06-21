@extends('layouts.app')

@section('content')

  @include('layouts.sidebar')

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Grade
      <small>Edit Grade</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="{{ route('grade.index') }}">Grade</a>
      </li>
      <li class="active">Edit Grade</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        {!! Form::model($grade, [
          'method' => 'PUT',
          'route' => ['grade.update', $grade->id],
        ])!!}

        @include('admin.grade.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
