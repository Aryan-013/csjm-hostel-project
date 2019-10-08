<?php
$connection=mysqli_connect('localhost','root','','csjm') or die("error connection");
if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
$username=mysqli_real_escape_string($connection,$username);
$password=mysqli_real_escape_string($connection,$password);   
$query="SELECT * FROM login_details WHERE user_id='{$username}'";
$select_user_query=mysqli_query($connection,$query);
if(!$select_user_query)
{
    die("error");
}
while($row=mysqli_fetch_array($select_user_query))
{
$us=$row['user_id'];
$ps=$row['password_id'];
}
if($username==$us && $password==$ps)
{
    header("Location:admin.php"); 
}
else if($username!==$us && $password!==$ps)
{
    header("Location:admin.php");
}
}
?>