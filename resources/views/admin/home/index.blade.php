@extends('layouts.app')

@section('content')

@include('layouts.sidebar')

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dasbhboard
    </h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body ">
                  <h3>Welcome to MyEntrance!</h3>
                  <p class="lead text-muted">Hello {{ Auth::user()->name }}, Welcome to MyEntrance</p>

                  <h4>Get started</h4>
                  <p><a href="{{ route('menu.index') }}" class="btn btn-primary">Write your first entrance</a> </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
