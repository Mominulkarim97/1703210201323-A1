<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
	<div class="container">
		<h2 style="text-align: center; margin: 10px 0;">Add Employee</h2>
		<form action="{{ URL::to('get_employee') }}" method="POST">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Enter Name</label>
		    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" >
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Date of Birth</label>
		    <input type="date" name="dob" class="form-control" id="exampleInputPassword1">
		  </div>
		  	<div class="form-group">
		    <label for="exampleInputEmail1">Salary</label>
		    <input type="number" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Gender</label>
		    <input type="radio"  name="gender" value="male">Male
		  </label>
  			<input type="radio"  name="gender" value="female">Female
		  </label>
		  <input type="radio"  name="gender" value="other">Others
		  </label>
		  </div>
		  <div class="form-group form-check">

		    <label class="form-check-label" for="exampleCheck1">Status</label>
		    <input type="checkbox" name="status"  value="1">
		    <input type="checkbox" name="status"  value="0">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>