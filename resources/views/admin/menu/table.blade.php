<div class="box-body ">
    <table class="table table-striped table-bordered">
      <thead style="background-color:#424242;color:#fff;">
          <tr>
            <td width="80">Action</td>
            <td>Page Name</td>
            <td width="240">Date of Entrance</td>
            <td width="60">Status</td>
            <td width="80">Action</td>
          </tr>
        </thead>
      <tbody>
      @foreach($menus as $menu)
        <tr>
          <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['menu.destroy', $menu->id]]) !!}

                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-xs btn-default disabled">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-xs btn-danger disabled">
                      <i class="fa fa-times"></i>
                    </button>

            {!! Form::close() !!}
          </td>
          <td>{{ $menu->name }}</td>
          <form action="{{route('toggle.status',$menu->id)}}" method="POST" class="pull-right" id="status-toggle">
            @csrf
            <td>
              @if ($menu->id == '3')
                <input type="text" name="date" value="" class="form-control {{ $errors->has('date') ? 'has-error' : '' }}" placeholder="@if($menu->date) {{ $menu->date }} @else {{'Date of Entrance'}} @endif">
                @if($errors->has('date'))
                    <span class="help-block">{{ $errors->first('date') }}</span>
                @endif
              @endif
            </td>
            <td>
              <label class="switch">
                @if ($menu->status == 1)
                  <input type="checkbox" value="0" name="status" checked>
                @else
                  <input type="checkbox" value="1" name="status">
                @endif
                <span class="slider round"></span>
              </label>
            </td>
            <td>
              <input class="btn btn-success" type="submit" value="Submit">
            </td>
        </form>
        </tr>
      @endforeach
      </tbody>
  </table>
</div>
