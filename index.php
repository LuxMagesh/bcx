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
        <!-- <li><a href="#">Explore</a></li>
        <li><a href="#">Offers</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">For Business</a></li>
        <li><a href="#">Hot Deals</a></li>
        <li><a href="#">Specials</a></li> -->
      </ul>
    </div>
    </nav>
    <div class="row ContentOne" >
      <div class="ContentTwo col s12 m4 xs12 text-white">
        <div class="card horizontal">
          <div class="card-stacked">
              <!-- <div class="card-content blue-grey darken-1 white-text">
              </div> -->
          </div>
        </div>
      </div>
      <div class="ContentOne col s12 m4 xs12" style="margin-top: 3.8%;">
    <div class="card horizontal" >
    <div class="card-stacked" >
        <div class="card-content blue-grey darken-1 white-text" >
          <div class="card-panel blue-grey darken-3 justify-content: center" style="border-radius: 5%;">
          <a href="#" class="justify-content: center" style="margin-top: 0.4%; margin-left: 0.7%;">
              <img src="./images/BCX-Logo2.png" style="height: 34px!important; width:83px!important">
          </a> 
          </div>
                <h6 class="justify-content: center" style="justify-content: center; font-size:x-large ;font-weight:bolder;">Welcome back!</h6>
                <p  class="justify-content: center red darken-3"style="border-radius: 25%; font-size:medium ;font-weight:bolder;">Log in and continue. . . . . </p>
          </div>
            <div class="card-action grey lighten-2">
            
              <form class="" action="login.php" method="POST">
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="text" name="username" value="" id="username" placeholder="   Username"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="password" name="password" class="validate" value="" id="password" placeholder="   Password"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                  <div class="btnsub justify-content: center red darken-3">
                            <div class="Login">
                                <input type="submit" name="login" id="btnsub" value="Login"/>
                            </div>
                            <!-- <div class="Cancel">
                                <input type="button" name="cancel" id="btnsub2" value="Cancel" onclick="reset();"/>
                          </div>                   -->
                      </div>
                  </div> 
                                  
              </form>
              <script>
                  function reset(){
                      document.getElementById("username").value="";
                      document.getElementById("password").value="";
                  }
              </script>
            </div>
           
          </div>
        </div>

      </div>
      <div class="ContentTwo col s12 m4 xs12 text-white">
        <div class="card horizontal">
          <div class="card-stacked">
              <!-- <div class="card-content blue-grey darken-1 white-text">
              </div> -->
          </div>
        </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
    
  </html>