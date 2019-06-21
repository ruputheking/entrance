<div class="box-body ">
  <table class="table table-striped table-bordered">
    <thead style="background-color:#424242;color:#fff;">
          <tr>
            <td width="80">Action</td>
            <td>Page Name</td>
            <td width="160">Students</td>
          </tr>
        </thead>
        <tbody>
          @foreach($faculty as $faculty)
              <tr>
                <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['faculty.destroy', $faculty->id]]) !!}
                          <a href="{{ route('faculty.edit', $faculty->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                          </a>
                          <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger">
                            <i class="fa fa-times"></i>
                          </button>
                  {!! Form::close() !!}
                </td>
                <td>{{ $faculty->name }}</td>
                <td>{{ $faculty->student->count() }}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
