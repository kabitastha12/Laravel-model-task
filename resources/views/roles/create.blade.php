<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Roles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
​
<div class="container">
  <h2>Roles</h2>
  <form action="{{ url('posts')}}" method="POST">
    @csrf
    
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
​
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" name="description">
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