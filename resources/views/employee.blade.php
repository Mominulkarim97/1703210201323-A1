<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee Table</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date Of birth</th>
                <th>Salary</th>
                        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employee as $e)
      <tr>
        <td>{{ $e->name }}</td>
        <td>{{ $e->email}}</td>
        <td>{{$e->date_of_birth}}</td>
                <td>{{ $e->salary }}</td>
                        <td>{{ $e->gender }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
