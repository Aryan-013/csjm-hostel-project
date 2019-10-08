<?php
include "connection.php";
?>

<html>
<title>
Csjm University | Hostel Official Website | Notices
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
include "head_navbar.php";
?>
<div class="row text-center">
<div class="col-lg-12 col-12">
<h3 class="text-center py-5">Welcome to notice section</h3>
</div>
</div>
<div class="container-fluid">
<div class="row py-3">
<div class="col-lg-12 col-12">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Notice ID</th>
      <th scope="col">Notice Name</th>
     
      
      <th scope="col">Downloads</th>
      <th scope="col">Submission Date</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $query="SELECT * FROM uploads";
      $select_comments=mysqli_query($connection,$query);
      while($row=mysqli_fetch_assoc($select_comments))
      {
        $comments=$row['comment'];
        $comment_date=$row['comment_date'];
        $comment_id=$row['comment_id'];
        echo "<tr>";
        echo "<td>$comment_id</td>";
        echo "<td>$comments</td>";
        echo "<td><a href=''>Download</a></td>";
        echo "<td>$comment_date</td>";
        echo "</tr>";
      
      }
      ?>
      
    
      
    
    
  </tbody>
</table>
</div>
</div>
</div>
<?php
include "contactus.php";
?>
</body>
</html>