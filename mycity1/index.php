<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <title>Mycity web application</title>

          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

          <link href="css/styles.css" rel="stylesheet">

          <style>
               
               .astonish {
                    visibility: visible;
               }

               @media (min-width: 768px) {
                    .astonish {
                         visibility: hidden;
                    }
                    .animated {
                         visibility: visible;
                    }
               }
          </style>
     </head>
     <body>
          
          <nav class="main-nav" id="main-nav">
               <div class="content-wrapper-sm">
                    <a href="#" class="navbar-brand">আমার শহর</a>
                    <div id="menu-button">
                         <div class="bar1"></div>
                         <div class="bar2"></div>
                         <div class="bar3"></div>
                    </div>
                    <ul class="nav-links">
                         <li><a href="#about">সম্পর্কে</a></li>
                         <li><a href="#contact">যোগাযোগ</a></li>
                         <li><a href="#reserve">লগিন</a></li>
                    </ul>
               </div>
          </nav>

          <header>
               
               <img class="img-absolute" src="img/city.png" alt="City 1">
               <div class="wrapper astonish animated fadeInDown">
                    <h1><strong>নাগরিক </strong>সেবা </h1>
                    <h2>খুঁজুন , জানুন , ঘুরুন ,.</h2>
               </div>
          </header>

        
          <main>
               <div class="content-wrapper" id="about">
                    
                    <img class="img-absolute" src="img/city2.png" alt="City 2">
                    <div class="grid">
                         <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
                              <h2 class="section-title">আমার শহর অ্যাপ সম্পর্কে</h2>
                              <p>আমার শহর অ্যাাপটিতে আপনি পাচ্ছেন সকল ধরনের নাগরিক সেবা । 
                              ট্রাভেল , ফুড, সিটি গাইড পাচ্ছেন খুব সহজে । </p>
                              <p>মেডিক্যাল সেবা থেকে শিক্ষা সেবা সব পাচ্ছেন  একইসাথে 
                               সাথে আরও থাকছে বিনোদন মূলক বিভিন্ন ফিচার । </p>
                              <p>আমার শহর অ্যাপের সাথে থাকুক , সময় বাঁচান , আপনার শহরকে জানুন 
                              স্মার্ট শহরের নাগরিক সেবা নিন </p>
                         </div>
                    </div>
               </div>

              

               <div class="content-wrapper" id="contact">
                  
                    <img class="img-absolute" src="img/city3.png" alt="City 3">

                  
                    <form class="contact-form astonish" action="#" method="post" data-animation="fadeInRight">
                         <h2 class="section-title">আমাদের সাথে যোগাযোগ</h2>
                         <div class="grid">
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="firstName" required>
                                        <label for="firstName">প্রথম নাম :</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="lastName" required>
                                        <label for="lasttName">শেষ নাম:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <input type="text" name="email" required>
                                        <label for="email">ইমেইল:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <textarea name="message" required></textarea>
                                        <label for="message">আপনার মন্তব্য:</label>
                                   </div>
                              </div>
                         </div>
                         <input class="btn btn-outline-teal" type="submit" value="পাঠান ">
                    </form>
               </div>

                <div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
                    <h2 class="section-title">নতুন দিগন্তের সূচনা </h2>
                    <p>আমার শহর অ্যাাপের আকর্ষণীয় সব সেবা পেতে এখনি যুক্ত  হন আমাদের বিশাল কমিনিউটিএর সাথে . 
                     নিজেক আবিষ্কার করুন স্মার্ট শহরের একজন নাগরিক হিসেবে । নিজে সেবা নিন , অন্যকে সেবা দিন। 
                     নিজের শহরকে গড়ে তুলুন আরও ডিজিটাল হিসেবে </p>
                    <a href="login/index.php" class="btn btn-outline-purple">আমাদের সাথে যুক্ত হন </a>
               </div>

               
               <iframe id="map" src="https://maps.google.com/maps?q=mymensingh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" style="border:0" allowfullscreen></iframe>
          </main>

         
          <footer>
               <div class="content-wrapper-sm display-flex-between">
                    <span></span>
               </div>
          </footer>

          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
          <script src="js/menu.js" charset="utf-8"></script>
          <script src="js/astonish.js" charset="utf-8"></script>
          <script src="js/nav.js" charset="utf-8"></script>
          <script src="js/scroll.js" charset="utf-8"></script>
     </body>
</html>
