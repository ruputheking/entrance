@extends('layouts.app')

@section('content')

  @include('layouts.sidebar')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Menu
        <small>Display All Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="{{ route('menu.index') }}">Menu</a>
        </li>
        <li class="active">All Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">

            @if(session('message'))
                <div class="alert alert-success" id="note">
                    {{ session('message') }}
                </div>
            @endif

            <div class="box">
              <div class="box-header clearfix">
                  <div class="pull-left">
                      <a href="{{ route('menu.create') }}" class="btn btn-success disabled"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                  <div class="pull-right">
                  </div>
              </div>
              <!-- /.box-header -->

              @if (! $menus->count())
                  <div class="alert alert-danger">
                      <strong>No record found</strong>
                  </div>
              @else
                      @include('admin.menu.table')
              @endif

              <!-- /.box-body -->
              <div class="box-footer clearfix">

                <div class="pull-right">
                  <small>{{ $menus->count() }} {{ str_plural('item', $menus->count()) }}</small>
                </div>
              </div>

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
