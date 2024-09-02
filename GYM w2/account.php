<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Account details-ToothGym|Ecommerce Website Design</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container">
     <div class="navbar">
        <div class="logo">
         <a href="index.html"><img src="imgs/home.png" alt="TOOthGYM" width="135px"></a>
          <pre><h5>     TOOTHGYM</h5></pre>
        </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.html">Home</a></li>
              <li><a href="product.html">Products</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="account.php">Account</a></li>
           </ul>
         </nav>
         <a href="cart.html"><img src="imgs/cart.png" alt="" width="30px" height="30px"></a>
         <a href="index.html">  <img src="imgs/menu.png" class="menu-icon" onclick="menutoggle()"></a>
     </div>
   </div>
  <!-------------------Account page-------------------------->
           <div class="account-page">

             <div class="container">
               <div class="row">
                 <div class="col-2">
                   <img src="imgs/home.png" width="100%">
                 </div>
                 <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                           <span onclick="login()">Login</span>
                           <span onclick="register()">Register</span>
                           <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="reg.php" method="post">
                           <input type="text" placeholder="E-mail" name="mail" required>
                           <input type="password" placeholder="Password"name="code" required>
                           <button type="Submit" class="btn" name="">Login</button>
                           <a href="">Forgot password</a>
                        </form>
                        <form id="RegForm" action="login.php" method="post">
                          <input type="text" placeholder="UserName" name="name" required>
                          <input type="email" placeholder="E-mail" name="mail" required>
                          <input type="password" placeholder="Password" name="passw" required>
                          <button type="Submit" class="btn">Register</button>
                       </form>
                    </div>
                </div>
               </div>
             </div>
            </div>
<!--------------------------footer----------------------------------->
<div class="footer">
  <div class="container">
     <div class="row">
          <div class="footer-col-1">
             <h3>Download our App</h3>
             <p>Download App for Android and IOS mobile phone.</p>
             <div class="app-logo">
               <img src="imgs/play-store.png">
               <img src="imgs/app-store.png">
             </div>
          </div>
          <div class="footer-col-2">
              <img src="imgs/home.png">
              <pre><h5>TOOTHGYM</h5></pre><br>
           </div>
          <div class="footer-col-3">
             <h3>Useful links</h3>
               <ul>
                  <li>Coupons</li>
                  <li>Blog Post</li>
                  <li>Return Policy</li>
                  <li>Join Afflilitate</li>
               </ul>        
           </div>
         <div class="footer-col-4">
            <h3>Follow As</h3>
             <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>YouTube</li>
             </ul>        
           </div>
        </div>
         <hr>
           <p class="copyright"> @ Copyright  2024-TOOTHGYM</p>
       </div>
    </div>
<!---------toggle menu------------>
     <script>
      var MenuItems=document.getElementById("MenuItems");
      MenuItems.style.maxHeight="0px";
      function menutoggle(){
         if(MenuItems.style.maxHeight=="0px")
         {
          MenuItems.style.maxHeight="200px";
         }
         else
         {
          MenuItems.style.maxHeight="0px";
         }
      }
     </script>

<!------------------js for toggle form----------------------------------->
       <script>
        var LoginForm=document.getElementById("LoginForm");
        var RegForm=document.getElementById("RegForm");
        var Indicator=document.getElementById("Indicator");

        function register()
        {
          RegForm.style.transform="translateX(0px)";
          LoginForm.style.transform="translateX(0px)";
          Indicator.style.transform="translateX(100px)";
        }
        function login()
        {
          RegForm.style.transform="translateX(300px)";
          LoginForm.style.transform="translateX(300px)";
          Indicator.style.transform="translateX(0px)";
        }



       </script>
</body>
</html>  