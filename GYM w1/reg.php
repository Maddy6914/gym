<?php
$con = new mysqli("localhost", "root", "", "toothgym");
$mail = $con->real_escape_string($_POST['mail']); 
$code = $con->real_escape_string($_POST['code']); // Escape input to prevent SQL injection

$result = mysqli_query($con, "SELECT * FROM register WHERE umail = '$mail' AND ucode = '$code'");
$row = mysqli_fetch_array($result);
if ($row['umail'] == $mail && $row['ucode'] == $code) {
    echo "<h1>Start your workout journey with Toothgym Eqipments</h1> <br>";
    echo "<h3>Welcome " . $mail . ",<br> you're Order related things are send to your mail id ,your order placed Successfully  </h3>";

   // echo "<script>location.replace('')</script>";
} else {
    echo "<script>alert('Check your Credentials')</script>";
    echo "<script>location.replace('account.php')</script>";
}
?>
