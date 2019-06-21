<div class="col-xs-9">
  <div class="box">
      <div class="box-body">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Full Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('Password') !!}<br>
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
            {!! Form::label('Role') !!}
            {!! Form::select('role', ['Admin' => 'Admin', 'Editor' => 'Editor'],null, ['class' => 'form-control', 'placeholder' => 'Choose yoour role']) !!}
            @if($errors->has('role'))
                <span class="help-block">{{ $errors->first('role') }}</span>
            @endif
        </div>
      </div>
  </div>
  <!-- /.box -->
  <div class="box-footer">
      <button type="submit" class="btn btn-primary">{{ $user->exists ? 'Update' : 'Save' }}</button>
      @if (Auth::user()->status == "Admin")
        <a href="{{ route('user.index') }}" class="btn btn-default">Cancel</a>
      @else
        <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
      @endif
  </div>
</div>
