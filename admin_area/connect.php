<?php
if(!$con){
  echo "Connection Successfull";
}
else{
  die(mysqli_error($con));
}
?>