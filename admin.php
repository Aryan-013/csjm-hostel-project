
<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $comment=$_POST['message'];
    $comment_date=date('d-m-y');
    $query="INSERT INTO uploads(comment,comment_date)";
    $query.="VALUES ('$comment','$comment_date')";
    $output=mysqli_query($connection,$query);
    
}
?>

<html>
<title>
Csjm University | Hostel Official Website | Admin Panel
</title>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="page-section py-5"style="background:black">
<h2 class="text-center" style="color:white">CSJMU Hostel Admin panel <?php $username ?> </h2>
</section>
<div class="container py-5">
<h5>Welcome to the Admin section of Chattrapati Shahuji Maharaj University Hostel Services. Here you can upload PDF files, images or type a notice. In addition to this you can also delete any existing notice or message. </h5>
</div>
<div class="container">
<div class="row py-3">
<div class="col-lg-12 col-md-12 col-12">
<form action="" method="post">
<div class="form-group">
    <label><h3 class="py-3">Write a Notice</h3></label>
    <textarea name="message" class="form-control" rows="3"></textarea>
    <button name="submit" type="submit" class="btn btn-primary mb-2">Submit Notice</button>
    <button name="submit" type="submit" class="btn btn-success mb-2">Upload a File</button>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>