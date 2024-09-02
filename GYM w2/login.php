<?php
$con=new mysqli("localhost","root","","toothgym");
if($con->connect_error){
  die("Connection faild: ".$con->connect_error);
}
//get user data
$name=$_POST['name'];
$mail=$_POST['mail'];
$pwd=$_POST['passw'];
//insert into db
$sql="INSERT INTO register (uname,umail,ucode) VALUES ('$name','$mail','$pwd')";
if($con->query($sql)===TRUE){
  echo "<script>alert('Form Submitted Successfully,________GO TO LOGIN__________');</script>";
  echo "<script>location.replace('account.php')</script>";
}
else{
  echo "Error: ".$sql."<br>".$con->error;
}
?>