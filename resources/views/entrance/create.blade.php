@extends('layouts.app')

@section('title', 'MyEntrance | Fill all Form')

@section('style')
<style media="screen">
.main-footer{
    display: none;
}
</style>
@endsection

@section('content')
  <section class="content-header" style="background-color:#ecf0f5">
    <h1>
      MyEntrance
      <small>Fill Entrance Form</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> MyEntrance</a>
      </li>
      <li class="active">Entrance Form</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" style="background-color:#ecf0f5">
      <div class="row">
        {!! Form::open([
          'method' => 'POST',
          'route' => 'entrance.store',
          'files' => TRUE,
        ]) !!}

        @include('entrance.form')

        {!! Form::close() !!}
      </div>
    <!-- ./row -->
  </section>
<!-- /.content-wrapper -->
@endsection
