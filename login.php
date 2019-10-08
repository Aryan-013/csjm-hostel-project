<?php 
ob_start();
?>
<?php
include "connection.php";
?>
<html>
<title>
Csjm University | Hostel Official Website | Login
</title>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include "navbar.php";
?>
<div class="container">
<div class="row py-5 mt-5">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<form action="login.php" method="post">
  <div class="form-group">
    <label><h4>Enter your Username</h4></label>
    <input name="uname" class="form-control" aria-describedby="emailHelp" placeholder="Enter Username">
    
  </div>
  <div class="form-group">
    <label><h4>Enter your Password</h4></label>
    <input name="pass" type="password" class="form-control" placeholder="Password">
  </div>

  <button name="login" type="submit" class="btn btn-primary">Login</button>
</form>
</div>

</div>
</div>
</body>