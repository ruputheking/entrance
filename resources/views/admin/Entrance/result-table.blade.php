<div style="border:1px solid #ccc; margin: 10px 0;padding:10px;">
  <label>Select File for Upload</label>
  <div class="clearfix" style="height:30px;">
    <form action="{{ route('result-list.import') }}" enctype="multipart/form-data" method="post">
      @csrf
      <input type="file" name="select_file" class="pull-left"/>
      <input type="submit" name="upload" class="btn btn-primary pull-right" style="margin-bottom:10px;" value="Upload">
      <span class="text-muted">.xls, .xslx</span>
    </form>
  </div>
</div>

<div class="form-group clearfix">
 <div class="pull-left" style="width:65%;">
   <input type="text" name="search" id="search" class="form-control" placeholder="Search Student by name, status, gender..." />
 </div>
 <div class="pull-right" style="width:30%;">
       {!! Form::select('search', ["Science" => "Science", "Management" => "Management"], null, ['class' => 'form-control', 'placeholder' => 'Select your Faculty', 'id' => 'search']) !!}
   </div>
 </div>

<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead style="background-color:#424242;color:#fff;">
      <tr>
        <td>Serial Number</td>
        <td>Name</td>
        <td>Faculty</td>
        <td>Gender</td>
        <td>DOB</td>
        <td>Status</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>
