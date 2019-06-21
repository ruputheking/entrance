<table>
  <thead>
    <tr>
      <td>Students</td>
      <td>Serial Number</td>
      <td>Name</td>
      <td>Faculty</td>
      <td>Gender</td>
      <td>DOB</td>
      <td>Status</td>
    </tr>
  </thead>
  <tbody>
    @php
      $i = 1;
    @endphp
    @foreach($results as $student)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $student->serial }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->faculty }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->status }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
