<!----------------database connection------------------------>

<?php
$con= new mysqli('localhost','root','','mystore');
if(isset($_POST['insert_brand']))
{
  $brand_title=$con->real_escape_string($_POST['brand_title']);
  
  //select db
  $result_select=mysqli_query($con,"Select * from brands where brand_title='$brand_title'");
  $number=mysqli_num_rows($result_select);
  if($number>0)
  {
    echo "<script>alert('This Category is already inserted into the database');</script>";
  }
  else
  {
  $result=mysqli_query($con,"INSERT INTO brands (brand_title) VALUES ('$brand_title')");
  if($result)
  {
    echo "<script>alert('Category has been inserted Successfully');</script>";
  }
  }
}
?>






<form action=""method="post" mb-2>
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
 <input type="submit" class=" btn btn-dark p-1 my-3 border-0" name="insert_brand" 
  value="Insert Brands">
  <!--<button class=" btn btn-dark p-1 my-3 border-0">Insert Brands</button>-->
</div>
</form>