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
<style>

.about-img{
    width: 600px;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    justify-content: center;

    border-radius: 10%;

    .gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
}
</style>
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
        <li><a href="#">For Business</a></li> -->
        <li><a href="http://bcx.42web.io/logout.php" class="waves-effect cyan darken-2 waves-light btn-small"><i class="material-icons left">power_settings_new</i>logout</a></li>
        <li><a onclick="history.back()"class="waves-effect cyan darken-2 waves-light btn-small"><i class="material-icons left">fast_rewind</i>back</a></li>
      </ul>
    </div>
    </nav>
    <div class="row ContentOne">
    <div class="ContentTwo col s12 m6 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
                <div class="row align-items-center justify-content-around flex-row-reverse">
                <div class="d-flex flex-column align-items-center text-center">
                <?php
                         require 'avatars.php'; 
                        for ($i=0; $i<1; $i++)
                        {
                        ?>
                            <img src="<?php   echo $array[rand(0, count($array) - 1)] ?>" style="border-radius: 10%;" alt="Admin" class="rounded-circle" width="200" height="200">
                            <?php         
                          }
                         ?>
                    <?php
                    require 'dbcon.php';
                    if (isset($_GET['uid'])){
                        $uid = $_GET['uid'];
                        
                        $sql5 = "SELECT * FROM `users` WHERE uid=$uid";
                        $result5 = $conn->query($sql5);
                        
                        if ($result5->num_rows > 0){
                        while($row = $result5->fetch_assoc()){
                            $uid = $row['f_name'];
                            $name = $row['f_name'];
                            $lastname = $row['l_name'];
                            $username1 = $row['username'];
                            $password1 = $row['password'];
                            $email1 = $row['email'];
                            $mobile1 = $row['mobile'];
                            $address1 = $row['address'];
                            $jobtitle1 = $row['job_title'];
                            $role1 = $row['role'];
                        ?>
                    <div class="mt-3">
                      <h4><?php echo print_r(rtrim($name)); ?> <?php echo print_r($lastname); ?></h4>
                      <p class="text-secondary mb-1"><?php echo print_r($jobtitle1); ?></p>
                      <p class="text-muted font-size-sm"><?php echo print_r($address1); ?></p>
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                    
                </div>
        </div>
      </div>
    </div>
      </div>
<div class="ContentOne col s12 m6 xs12 text-white">
      <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
          
                <div class="row align-items-center justify-content-around flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h4 class="theme-color">Username : <?php echo print_r($username1); ?></h4>
                            <hr>
                            <h6 class="theme-color">Role : <?php echo print_r($role1); ?></h6>
                            <h6 class="theme-color">Job Title : <?php echo print_r($jobtitle1); ?></h6>
                            <h6 class="theme-color">Address: <?php echo print_r($address1); ?></h6>
                            <hr>
                            <p>My contact details are:</p>
                            <ol>
                                <li>Email : <?php echo print_r($email1); ?></li>
                                <li>Mobile : <?php echo print_r($mobile1); ?></li>
                            </ol>
                            <hr>
                            <div class="btn-bar">
                            <a class="waves-effect cyan darken-2 waves-light btn-small" href="update.php?uid=<?php echo $row["uid"]; ?>">Edit</a>
                                <!-- <a class="px-btn theme" href="#">View Users</a> -->
                                <!-- <a class="px-btn theme-t" href="#">Download CV</a> -->
                            </div>
                        </div>     
                            <?php
                                    }
                                }
                            }
                    ?>
                    </div>
                </div>
        </div>
      </div>
    </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
  </html>