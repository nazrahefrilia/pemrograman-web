<?php 
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/slider.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script src="js/tms-0.4.1.js"></script>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
     </head>
     <body>
       <div class="main">

<header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="start.php"><img src="images/logo8.png" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="home.php">Home</a></li>
                   <li><a href="news.php">News </a></li>
                   <li class="with_ul"><a href="contacts.php">Contacts</a>
                   <ul>
                         <li><a href="contacts.php"> Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        
                     </ul></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide3.jpg" alt=""></li>
          <li><img src="images/slide4.jpg" alt=""></li>
          <li class="mb0"><img src="images/slide5.jpg" alt=""></li>
        </ul>
      </div>
    </div>
 </div>

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
      <div class="grid_7">
        <h2>Welcome <?php echo $_SESSION['username'];  ?> </h2>
        <div class="page1_block col1">
          <img src="images/welcome.png" class="img-responsive" alt="Cinque Terre" a>
          <div class="extra_wrapper">
            <p><span class="col2"><a href="#" rel="nofollow">Click here</a></span> to complete your data information, for more info about your port  </p>
            I'm , I live in Spain. I'm a self taught web designer, and co-founder based in Spain. I'm currently part of a small Port development in an upcoming start-up called High Port <br>
            <a href="#" class="btn">more</a>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>Notification</h2>
        <ul class="list">
          <li><a href="#">You haven't seen news for today</a></li>
          <li><a href="#">Monthly Photo Awards in January will start next week</a></li>
          <li><a href="#">You're friend Charlie has won Monthly Photo Awards</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Monthly Photo Awards has come to a close </a></li>
          <li><a href="#">Wellcome to CSA, we're gladly to know you have join us</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
        <h2>Photo Of The Month</h2>
        <a href="#" class="prev"></a><a href="#" class="next"></a>
        <ul class="carousel1">
          <li><div><img src="images/page1_img7.jpg" alt="">
          <div class="col1 upp"> <a href="#">Port Vell, Barcelona, Spain</a></div>
          <span> Dorem ipsum dolor amet consectetur</span>
          </div>
          </li>
          <li><div><img src="images/page1_img8.jpg" alt="">
          <div class="col1 upp"> <a href="#">Jurong Port, Singapore</a></div>
          <span> Dorem ipsum dolor amet consectetur</span>
          </div>
          </li>
          <li><div><img src="images/page1_img9.jpg" alt="">
          <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
          <span> Dorem ipsum dolor amet consectetur</span>
          </div>
          </li>
          <li><div><img src="images/page1_img10.jpg" alt="">
          <div class="col1 upp"> <a href="#">Puerto de Algeciras, Spain</a></div>
          <span> Dorem ipsum dolor amet consectetur</span>
          </div>
          </li>
          <li><div><img src="images/page1_img11.jpg" alt="">
          <div class="col1 upp"> <a href="#">Port of Los Angeles, California</a></div>
          <span> Dorem ipsum dolor amet consectetur</span>
          </div>
          </li>
        </ul>
      </div>
      
    </div>
    <div class="clear"></div>
    <div class="bottom_block">
      <div class="grid_6">
        <h3>CONNECT WITH US</h3>
        <div class="socials">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
        <nav><ul>
                   <li class="current"><a href="index.html">Home</a></li>
                   <li><a href="index-4.html">News </a></li>
                   <li><a href="index-5.html">Contacts</a></li>
                 </ul></nav>
      </div>
      <div class="grid_6">
        <h3>Email Updates</h3>
        <p class="col1">Join our digital mailing list and get news<br> deals and be first to know about events</p>
        <form id="newsletter">
                  <div class="success">Your request has been sent!</div>
                  <label class="email">
                       <input type="email" value="Enter e-mail address" >
                       <a href="#" class="btn" data-type="submit">submit</a> 
                        <span class="error">*This is not a valid email address.</span>
                  </label> 
              </form> 
          </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<footer>    
  <div class="container_12">
    <div class="grid_12">
     © 2017 CSA Entertainment. All Rights Reserved. Cargo Shipping Assistance, CSA.com and the CSA logo are trademarks of CSA Entertainment in the U.S. and/or other countries.
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>