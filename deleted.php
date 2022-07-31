<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="lib/css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image: url('./images/pexels-evgeniy-grozev-960919.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
    <nav class="nav blue-grey darken-2" >
    <div class="nav-wrapper">
    <a href="#" class="brand-logo" style="margin-top: 0.4%; margin-left: 0.7%;">
      <img src="./images/BCX-Logo2.png" style="height: 34px!important; width:83px!important">
    </a> 
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Explore</a></li>
        <li><a href="#">Offers</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">For Business</a></li>
        <li><a href="#">Hot Deals</a></li>
        <li><a href="#">Specials</a></li>
      </ul>
    </div>
    </nav>
    <div class="row ContentOne">
   
      <div class="ContentTwo col s12 m12 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
            <div class="card-panel blue-grey darken-3">
                <span class="blue-text" style="font-size:x-large ;font-weight:bolder"><i class="small material-icons">sentiment_very_satisfied</i>Thank you !!!</span>
            </div>
            <div class="card-panel blue-grey darken-3 " style="justify-content: center; font-size:x-large; font-style: oblique; padding-top: 100px; padding-bottom: 100px; padding-left:50px; padding-right:50px">
            <?php
                include_once 'add_user.php';
                ?>
            <h3 style="justify-content: center; font-size:x-large; font-style: oblique; padding-left:50px; padding-right:50px">The User has been deleted successfully !!! !!! Wait,  You'll be redirected to the Home Page shortly.............</h3> 
           
            </div>
        </div>
      </div>
    </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
    <?php
     header( "refresh:10;url=/bcx/index.php" );
    ?>
  </html>