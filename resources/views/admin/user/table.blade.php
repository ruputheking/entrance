<div class="box-body ">
  <table class="table table-striped table-bordered">
    <thead style="background-color:#424242;color:#fff;">
      <tr>
        <td width="80">Action</td>
        <td>User Name</td>
        <td>Email</td>
        <td width="160">Role</td>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $user)
        <tr>
          <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-xs btn-default">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger">
                      <i class="fa fa-times"></i>
                    </button>
            {!! Form::close() !!}
          </td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            {{ $user->role }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
