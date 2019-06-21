@extends('layouts.app')

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
      <small>Get your result by Date of Birth</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> MyEntrance</a>
      </li>
      <li class="active">Entrance Result</li>
    </ol>
  </section>
  @if(isset($result))
    <section class="content" style="background-color:#ecf0f5">
      <div class="box" style="padding:20px;">
        <p> The Search results for your query <b> {{ $result->name }}</b> and<b> {{ $result->dob }} </b> are :</p>
        <h2>Sample User details</h2>
        <table class="table table-striped table-bordered">
            <thead style="background-color:#434343;color:#fff;">
                <tr>
                    <th>Name</th>
                    <th>Faculty</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->faculty }}</td>
                    <td>{{ $result->gender }}</td>
                    <td>{{ $result->dob }}</td>
                    <td>{{ $result->status }}</td>
                </tr>
            </tbody>
        </table>
      </div>
    </section>
  @else
    <div class="content-header" style="float:right; margin-bottom: -10px; color:red;">
      <span>If you wants to get result by <a href="{{ route('entrance.search') }}">Serial Number</a>.</span>
    </div>
    <div class="container" style="padding:10px;">
      @if(session('message'))
          <div class="alert alert-info" style="margin:10px 30px;padding:10px 30px;">
              {{ session('message') }}
          </div>
      @endif
    </div>
    <section class="content" style="background-color:#ecf0f5">
      <div class="box">
        <div class="box-body">
          {!! Form::open(['method'=>'post', 'route' => 'entrance.dob']) !!}

          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Full Name') !!}
            {!! Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Enter your full name...']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
            {!! Form::label('Date of Birth') !!}
            {!! Form::text('dob', null,['class'=>'form-control', 'placeholder' => 'Enter your date of birth...']) !!}
            @if($errors->has('dob'))
                <span class="help-block">{{ $errors->first('dob') }}</span>
            @endif
          </div>
          {!! Form::submit('submit', null,['class'=>'form-control']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </section>
  @endif
@endsection
