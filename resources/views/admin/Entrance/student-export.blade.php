<table>
  <thead>
    <tr>
      <td>Students</td>
      <td>Serial Number</td>
      <td>Name</td>
      <td>Prevoius School</td>
      <td>Gender</td>
      <td>Faculty</td>
      <td>GPA</td>
      <td>DOB</td>
    </tr>
  </thead>
  <tbody>
    @php
      $i = 1;
    @endphp
    @foreach($students as $student)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $student->serial }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->school }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->faculty->name }}</td>
            <td>{{ $student->gpa }}</td>
            <td>{{ $student->dob }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
