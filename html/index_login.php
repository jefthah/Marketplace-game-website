<?php
session_start(); // Memulai sesi

require_once "koneksi.php"; // Memasukkan file koneksi.php

// Mendapatkan informasi pengguna dari database
$username = $_SESSION['username'];
$query = "SELECT name FROM users WHERE email = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        <!-- header inner -->
        <div class="header">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo">
                             <a href="index.html"><img src="images/logo_sijago_1.png" alt="#" /></a>
                          </div>
                          <?php if (isset($name)) { ?>
                          <div class="welcome">
                             <h2>Selamat Datang, <?php echo $name; ?>!</h2>
                          </div>
                          <?php } ?>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark  ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="about_2.php">About</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="glasses.html">Our Games</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                             </li>
                             
                             <li class="nav-item d_none login_btn">
                                <a class="nav-link" href="logout.php">Logout</a>
                             </li>
                             <li class="nav-item d_none sea_icon">
                                <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                             </li>
                          </ul>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <!-- Register -->
      <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="registerModalLabel">Register</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="register.php" method="post">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                     </div>
                     <div class="text-center">
                        <p>Or sign up with:</p>
                        <div class="social-buttons">
                           <button type="button" class="btn btn-primary"><i class="fab fa-google"></i> Sign in with Google</button>
                           <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Sign in with Facebook</button>
                           <button type="button" class="btn btn-primary"><i class="fab fa-steam"></i> Sign in with Steam</button>
                        </div>
                        <div class="logo-container">
                           <img src="images/google.png" alt="Google Logo" class="logo-google">
                           <img src="images/steam.png" alt="Facebook Logo" class="logo-facebook">
                           <img src="images/facebook.png" alt="Steam Logo" class="logo-steam">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
      
      
      
      <!-- end register -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Top 3 Games <br></span>Valorant</h1>
                           <figure><img src="images/valo1.png" alt="#"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Top 3 Games<br></span>Dead Island 2</h1>
                           <figure ><img src="images/Dead Island.png" alt="#" style="border-radius: 20px;"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Top 3 Games<br></span>Fifa 2017</h1>
                           <figure><img src="images/fifa.png" alt="#"/></figure>
                           <a class="read_more" href="#">Shop Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/valo.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>About Our Shop</h2>
                     <p>Marketplace Game kami adalah platform yang menyediakan berbagai macam permainan dari berbagai pengembang. Di sini, para pemain dapat menemukan dan membeli permainan yang mereka sukai. Marketplace Game kami menawarkan beragam genre permainan, termasuk aksi, petualangan, strategi, puzzle, dan banyak lagi. Para pengembang game dapat mempublikasikan karya mereka di platform kami, memberi pemain akses ke berbagai pilihan permainan yang menarik. Kami berkomitmen untuk memberikan pengalaman bermain yang berkualitas tinggi dan memastikan bahwa setiap pemain dapat menemukan permainan yang sesuai dengan minat dan preferensi mereka.</p>
                  </div>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Games</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                        e et dolore magna aliqua. Ut enim ad minim veniam, qui
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/sotf_1.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>250.000,00</h3>
                     <p>Sons Of The Forest</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/far_cry6.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>600.000,00</h3>
                     <p>Far Cry 6</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/cod.png" alt="#"/></figure>
                     <h3><span class="blu">IDR</span>1.040.000,00</h3>
                     <p>Call Of Duty Modern Warfare 2</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/dead_space.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>527.200,00</h3>
                     <p>Dead Space</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/gow.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>729.000,00</h3>
                     <p>God Of War</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/FIFA2.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>659.000,00</h3>
                     <p>FIFA 22</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/NFS.png" alt="#"/></figure>
                     <h3><span class="blu">IDR </span>759.000,00</h3>
                     <p>Need For Speed Unbound</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/FORZA.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Forza Horizon 5</p>
                     <a class="read_more" href="#">Shop Now</a>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="games.html">Show More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Our shop section -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/valo1.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Best Game Ever</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a class="read_more" href="#">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our shop section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Team</h2>
                     <p>Tim kami adalah tim yang berbakat dan berdedikasi dengan keahlian yang beragam. Kami bekerja sama untuk mencapai tujuan bersama dengan kreativitas dan semangat tinggi. Kami memiliki komunikasi terbuka, adaptif terhadap perubahan, dan mampu mengatasi tantangan dengan cepat. Dengan kepemimpinan yang kuat dan dedikasi yang tinggi, kami berusaha memberikan kualitas terbaik dalam setiap pekerjaan yang kami lakukan.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Kamal Ibrahim</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Mosad Cahyo Usodo</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Arif Hidayat</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/jef" alt="#"/></figure>
                                          <h3>Jefta Supraja</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, fermentum id dictum a, finibus ut dolor. Integer tempor justo sed tortor tincidunt vulputate. In eleifend laoreet massa, non interdum lacus iaculis et.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Ranadea Muhamad Gunawan</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem massa, fermentum id dictum a, finibus ut dolor. Integer tempor justo sed tortor tincidunt vulputate. In eleifend laoreet massa, non interdum lacus iaculis et.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                        <div class="carousel-item active">
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients section -->
      <!-- contact section -->
     
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +01 1234567890</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>
message.txt
26 KB