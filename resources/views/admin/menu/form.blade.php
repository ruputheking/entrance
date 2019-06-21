<div class="col-xs-9">
  <div class="box">
      <div class="box-body">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('menu name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('route') ? 'has-error' : '' }}">
            {!! Form::label('route') !!}
            {!! Form::text('route', null, ['class' => 'form-control']) !!}
            @if($errors->has('route'))
                <span class="help-block">{{ $errors->first('route') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
            {!! Form::label('status') !!}
            {!! Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control']) !!}
            @if($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
            @endif
        </div>
      </div>
  </div>
  <!-- /.box -->
  <div class="box-footer">
      <button type="submit" class="btn btn-primary">{{ $menu->exists ? 'Update' : 'Save' }}</button>
      <a href="{{ route('menu.index') }}" class="btn btn-default">Cancel</a>
  </div>
</div>
