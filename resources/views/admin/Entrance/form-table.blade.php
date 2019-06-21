<div class="form-group clearfix">
   <div class="pull-left" style="width:65%;">
     <input type="text" name="search" id="search" class="form-control" placeholder="Search Student by name, school, gender, gpa" />
   </div>
   <div class="pull-right" style="width:30%;">
     {!! Form::select('search', $faculty, null, ['class' => 'form-control', 'placeholder' => 'Select your Faculty', 'id' => 'search']) !!}
   </div>
 </div>

<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead style="background-color:#424242;color:#fff;">
      <tr>
        <td>S/N</td>
        <td>Name</td>
        <td>Prevoius School</td>
        <td>Gender</td>
        <td>Faculty</td>
        <td>GPA</td>
        <td>DOB</td>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>
