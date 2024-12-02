<?php
if(!empty($_POST)){
  if(isset($_POST['name'])){
    $name = $_POST['name'];
  }
  if(isset($_POST['email'])){
    $name = $_POST['email'];
  }
  if(isset($_POST['DoB'])){
    $name = $_POST['DoB'];
  }
  if(isset($_POST['password'])){
    $name = $_POST['password'];
  }
  if(isset($_POST['confirm'])){
    $name = $_POST['confirm'];
  }
  if(isset($_POST['address'])){
    $name = $_POST['address'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Vertical (basic) form</h1>
  <br>
  <form method="post">
    <div class="form-group">
        <label for="name">Full name:</label>
        <input type="Text" class="form-control" id="email" placeholder="Enter your full name
        " name="email" require>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" require>
    </div>
    <div class="form-group">
        <label for="DoB">Date of Birth:</label>
        <input type="date" class="form-control" id="DoB" name="DoB" require>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" require>
    </div>
    <div class="form-group">
      <label for="confirm">Password:</label>
      <input type="password" class="form-control" id="confirm" placeholder="Confirm password" name="confirm" require>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address"  name="address" require>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <br>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
