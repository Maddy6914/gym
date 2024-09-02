<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatable" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>ToothGym|Admin Dashboard</title>
  <!-----------------------Bootstrap Css Link------------------------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
   rel="stylesheet" 
   integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
   crossorigin="anonymous">
  <!--------------------font awesome link------------------>
  <link rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
   integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
   crossorigin="anonymous"
   referrerpolicy="no-referrer" />
   <!----------------------css  link----------------------------------->
  <link rel="stylesheet" type="text/css" href="style1.css">
 
</head>
<body>
<!------------------------nav bar------------------------------------------>
     <div class="container-fluid p-0">
      <!-----------------First child-------------------------------->
           <nav class="navbar navbar-expand-lg navbar-light bg-danger text-white">
           <div class="container-fluid">
            <img src="imgs/home.png" alt=""class="logo">
            <nav class="navbar navbar-expand-lg">
              <ul class="navbar-nav">
                <li class="nav-ite">
                <a href="" class="nav-link">Welcome Guest</a>
                </li>
              </ul>

            </nav>
           </div>
           </nav>
        <!---------------------Second Child----------------------------->
           <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
           </div>
        <!---------------------third Child----------------------------->
         <div class="row">
            <div class="col-mg-12 bg-secondary p-2 d-flex align-items-center">
              <div class="p-5">
                 <a href="#"><img src="imgs/dums.jpg" alt="" class="admin_img" ></a>
                 <p class="text-light text-center">User Name</p>
              </div>
              <!----button.*10>a.nav-link.text-light.bg.-info.my-1--------->
              <div class="button text-center p-5">
              <button class="my-3"> <a href="" class="btn btn-dark p-3 border-0 ">Insert Products</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0  ">View Products</a></button>
              <button class="my-3"><a href="index.php?insert_category" class="btn btn-dark p-3 border-0  ">Insert Categories</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0  ">View Categories</a></button>
              <button class="my-3"><a href="index.php?insert_brand" class="btn btn-dark p-3 border-0 ">Insert Brands</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0  ">View Brands</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0  ">All Orders</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0 ">All Payment</a></button>
              <button class="my-3"><a href="" class="btn btn-dark p-3 border-0  ">List Users</a></button>
              <button class="my-3"><a href="index.html" class="btn btn-dark p-3 border-0 ">Logout</a></button>

            </div>
         </div>
     </div>

<!-----------------footer----------------->
<div class="bg-danger text-white p-3 text-center footer">
  <p class="copyright"> @ Copyright  2024-TOOTHGYM</p>
</div>
</div>

<!---------------fourth child-------------------------------------->
     <div class="container my-5">
        <?php
        if(isset($_GET['insert_category']))
        {
          include('insert_categories.php');
        }
        if(isset($_GET['insert_brand']))
        {
          include('insert_brands.php');
        }
        ?>
      </div>
<!------------------------------BootStrap js link----------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
 crossorigin="anonymous"></script>

</body>
</html>