<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
​
<div class="container">
  <h2>Employee form</h2>
  <form action="{{ url('employees')}}" method="POST">
    @csrf
    
    <div class="form-group">
      <label for="id">Id:</label>
      <input type="number" class="form-control" id="id" name="id">
    </div>

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
​
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>

    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="text" class="form-control" id="salary" name="salary">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
​
</div>
​
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>