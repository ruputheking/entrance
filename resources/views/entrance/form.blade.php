<div class="col-xs-9">
  <div class="box" style="margin-bottom:0;">
      <div class="box-body">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('school') ? 'has-error' : '' }}">
            {!! Form::label('Previous School') !!}
            {!! Form::text('school', null, ['class' => 'form-control']) !!}
            @if($errors->has('school'))
                <span class="help-block">{{ $errors->first('school') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            {!! Form::label('phone') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            @if($errors->has('phone'))
                <span class="help-block">{{ $errors->first('phone') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('gpa') ? 'has-error' : '' }}">
            {!! Form::label('GPA') !!}
            {!! Form::text('gpa', null, ['class' => 'form-control']) !!}
            @if($errors->has('gpa'))
                <span class="help-block">{{ $errors->first('gpa') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
            {!! Form::label('address') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
            @if($errors->has('address'))
                <span class="help-block">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('faculty_id') ? 'has-error' : '' }}">
            {!! Form::label('faculty_id', 'Holding Faculty') !!}
            {!! Form::select('faculty_id', $faculty, null, ['class' => 'form-control', 'placeholder' => 'Select your Faculty']) !!}
            @if($errors->has('faculty_id'))
                <span class="help-block">{{ $errors->first('faculty_id') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('level_id') ? 'has-error' : '' }}">
            {!! Form::label('level_id', 'Holding Class') !!}
            {!! Form::select('level_id', $class, null, ['class' => 'form-control', 'placeholder' => 'Select your Class']) !!}
            @if($errors->has('level_id'))
                <span class="help-block">{{ $errors->first('level_id') }}</span>
            @endif
        </div>

      </div>
  </div>
  <!-- /.box -->
</div>

<div class="col-xs-3">
  @php
    $serial = "2076GSS" . rand(999999, 1111111);
  @endphp
  <input type="hidden" name="serial" value="{{$serial}}" class="form-control">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Gender</h3>
        </div>
        <div class="box-body text-center" style="padding: 0 10px;">
          <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
              <br>
              {!! Form::select('gender', ["Male" => "Male", "Female" => "Female"], null, ['class' => 'form-control', 'placeholder' => 'Chose your Gender']) !!}
              @if($errors->has('gender'))
                  <span class="help-block">{{ $errors->first('gender') }}</span>
              @endif
          </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Date of Birth</h3>
        </div>
        <div class="box-body">
          <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
              <div class='input-group date' id='datetimepicker1'>
                  {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'YYYY / MM / DD']) !!}
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>

              @if($errors->has('dob'))
                  <span class="help-block">{{ $errors->first('dob') }}</span>
              @endif
          </div>

        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Feature Image</h3>
        </div>
        <div class="box-body text-center" style="padding: 0 10px;">
          <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" style="margin:0;">
              <br>
              <div class="fileinput fileinput-new" data-provides="fileinput" style="margin:0;">
                <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                  <img src="/backend/img/No-image.png" style="width:180px; height:140px;"  alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                <div style="margin:10px 0;">
                  <span class="btn btn-outline-secondary btn-file btn-success"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                  <a href="#" class="btn btn-outline-secondary fileinput-exists btn-danger" data-dismiss="fileinput">Remove</a>
                </div>
              </div>
              @if($errors->has('image'))
                  <span class="help-block">{{ $errors->first('image') }}</span>
              @endif
          </div>
        </div>
        <div class="box-footer clearfix">
          <div class="pull-right">
              {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>
    </div>
</div>
