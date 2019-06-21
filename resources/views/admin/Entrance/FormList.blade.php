@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
@endsection

@section('content')

  @include('layouts.sidebar')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Entrance Forms
        <small>Display All Entrance Forms</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="active"> Entrance All Form List </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">

            @if(session('message'))
                <div id="note">
                    {{ session('message') }}
                </div>
            @endif

            <div id="message-error"></div>

            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                  @include('admin.entrance.form-table')
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">

                <div class="pull-left" style="height:22px;">
                  <div class="clearfix" style="height:22px;">

                    <div class="pull-left">
                      <form class="form-group" style="margin: 0px;" action="{{ route('form-list.destroy', 1) }}" method="post">
                        <button type="button" class="btn btn-danger btn-xs delete">Delete All records</button>
                      </form>
                    </div>

                    <div class="pull-right">
                      <form class="form-group" style="margin-left: 10px; margin-bottom:0;" action="{{ route('form-list.export') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-xs">Download All records</button>
                      </form>
                    </div>

                  </div>
                </div>

                <div class="pull-right">
                  <small><span id="total_records"></span> items</small>
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

@section('script')
  <script>
  $(document).ready(function(){

   fetch_customer_data();

   function fetch_customer_data(query = '')
   {
    $.ajax({
     url:"{{ route('form-list.action') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('tbody').html(data.table_data);
      $('#total_records').text(data.total_data);
     }
    })
   }

   $(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_customer_data(query);
   });

   $(document).on('click', '.delete', function(){
    var id = $(this).attr("id");
    if(confirm("Are you sure you want to delete this records?"))
    {
     $.ajax({
      url:"{{ route('form-list.destroy') }}",
      method:"GET",
      data:{id:id},
      success:function(data)
      {
       $('#message-error').html(data);
       fetch_customer_data();
      }
     });
    }
   });

  });
  </script>
@endsection
