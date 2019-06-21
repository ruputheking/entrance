<div class="box-body ">
  <table class="table table-striped table-bordered">
    <thead style="background-color:#424242;color:#fff;">
      <tr>
        <td width="80">Action</td>
        <td>Grade Name</td>
        <td width="160">Students</td>
      </tr>
    </thead>
    <tbody>
    @foreach($grade as $grade)
      <tr>
        <td>
          {!! Form::open(['method' => 'DELETE', 'route' => ['grade.destroy', $grade->id]]) !!}

                  <a href="{{ route('grade.edit', $grade->id) }}" class="btn btn-xs btn-default">
                    <i class="fa fa-edit"></i>
                  </a>
                  <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger">
                    <i class="fa fa-times"></i>
                  </button>

          {!! Form::close() !!}
        </td>
        <td>{{ $grade->name }}</td>
        <td>
          {{ $grade->student->count() }}
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
