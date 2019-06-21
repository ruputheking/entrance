<div class="col-xs-9">
  <div class="box">
      <div class="box-body">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Faculty Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
      </div>
  </div>
  <!-- /.box -->
  <div class="box-footer">
      <button type="submit" class="btn btn-primary">{{ $faculty->exists ? 'Update' : 'Save' }}</button>
      <a href="{{ route('faculty.index') }}" class="btn btn-default">Cancel</a>
  </div>
</div>
