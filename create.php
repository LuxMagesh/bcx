<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="lib/css/style.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      <style>

.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}    

/* user-dashboard-info-box */
.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
.user-dashboard-info-box .candidates-list .thumb img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    border-radius: 50%;
}

.user-dashboard-info-box .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
}

.user-dashboard-info-box .candidates-list td {
    vertical-align: middle;
}

.user-dashboard-info-box td li {
    margin: 0 4px;
}

.user-dashboard-info-box .table thead th {
    border-bottom: none;
}

.table.manage-candidates-top th {
    border: 0;
}

.user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
    margin-bottom: 10px;
}

.table.manage-candidates-top {
    min-width: 650px;
}

.user-dashboard-info-box .candidate-list-details ul {
    /* color: #969696; */
}

/* Candidate List */
.candidate-list {
    /* background: #ffffff; */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.candidate-list:hover {
    -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    position: relative;
    z-index: 99;
}
.candidate-list:hover a.candidate-list-favourite {
    color: #e74c3c;
    -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
    box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
}

.candidate-list .candidate-list-image {
    margin-right: 25px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    border: none;
}
.candidate-list .candidate-list-image img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
}

.candidate-list-title {
    margin-bottom: 5px;
}

.candidate-list-details ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0px;
}
.candidate-list-details ul li {
    margin: 2px 5px 2px 0px;
    font-size: 13px;
    width:60vw;
    /* height: 14vh; */
}

.candidate-list .candidate-list-favourite-time {
    margin-left: auto;
    text-align: center;
    font-size: 13px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px;
}
.candidate-list .candidate-list-favourite-time span {
    display: block;
    margin: 0 auto;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite {
    display: inline-block;
    position: relative;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #eeeeee;
    border-radius: 100%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-bottom: 20px;
    font-size: 16px;
    color: #646f79;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
    /* background: #ffffff; */
    color: #e74c3c;
}

.candidate-banner .candidate-list:hover {
    position: inherit;
    -webkit-box-shadow: inherit;
    box-shadow: inherit;
    z-index: inherit;
}

/* .bg-white {
    background-color: #ffffff !important;
} */
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
      </style>
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
        <li><a href="#">For Business</a></li> -->
        <li><a href="http://bcx.42web.io/logout.php" class="waves-effect cyan darken-2 waves-light btn-small"><i class="material-icons left">power_settings_new</i>logout</a></li>
        <li><a onclick="history.back()"class="waves-effect cyan darken-2 waves-light btn-small"><i class="material-icons left">fast_rewind</i>back</a></li>
        
      </ul>
    </div>
    </nav>
    <div class="row ContentOne">
      <div class="ContentOne col s12 m4 xs12">
    <div class="card horizontal">
    <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
          <div class="card-panel blue-grey darken-3">
            <span class="blue-text" style="font-size:x-large ;font-weight:bolder;"> <i class="small material-icons">person_add</i>Add User
          </span>
          </div>
                <p>Fill in the form below and click submit to add a new user</p>
          </div>
            <div class="card-action grey lighten-2">
            <?  require_once 'add_user.php'; ?>
            <?php 
                if (isset($_SESSION['message'])): ?>

                <div class="alert alert-<?=$_SESSION['msg_type']?>">
              <?php

                echo $_SESSION['message'];
                unset ($_SESSION['message']);

              ?>
              </div>
              <?php endif ?>
  
              <form class="" action="thankyou.php" method="POST">
              <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="hidden" name="uid" class="validate" value="" id="uid" placeholder="   User id"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="text" name="f_name" pattern="[A-Za-z]*" class="validate" value="" id="f_name" placeholder="   Firstname"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                            <input type="text" name="l_name" pattern="[A-Za-z]*" class="validate" value="" id="l_name" placeholder="    Lastname"/>
                            <span id="c2" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="username" value="" id="username" placeholder="   Username"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="password" name="password" value="" id="password" placeholder="   Password 8+ characters / special incl."/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="email" value="" id="email" placeholder="    Email">
                              <span id="c4" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="mobile" value="" id="mobile" placeholder="   Mobile Number"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="address" value="" id="address" placeholder="   Address"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="job_title" value="" id="job_title" placeholder="   Job Title"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>       
                  <div class="row">
                  <div class="btnsub">
                                      <div class="Add User">
                                          <input type="submit" name="submit" id="btnsub" value="Add User"/>
                                      </div>
                                      <div class="Cancel">
                                          <input type="button" name="cancel" id="btnsub2" value="Cancel" onclick="reset();"/>
                                      </div>                  
                                  </div>
                  </div> 
                                  
              </form>
        <script>
            function reset(){
                document.getElementById("f_name").value="";
                document.getElementById("l_name").value="";
                document.getElementById("username").value="";
                document.getElementById("password").value="";
                document.getElementById("email").value="";
                document.getElementById("mobile").value="";
                document.getElementById("address").value="";
                document.getElementById("job_title").value=""; 
            }
        </script>
            </div>
           
          </div>
        </div>

      </div>
      <div class="ContentTwo col s12 m8 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
      <div class="card-panel blue-grey darken-3">
        <span class="blue-text" style="font-size:x-large ;font-weight:bolder"><i class="small material-icons">list</i>User Records</span>
      </div>
      <div class="card-panel white-text blue-grey darken-3" style="font-size:small; font-style: oblique;">
        <?php 
          require 'dbcon.php';
          $sql = "SELECT * FROM `users`";
          $result = $conn->query($sql);
        ?>
        <?php
            while ($row = $result->fetch_assoc()) {
            require 'avatars.php'; 
          ?>

    
        <div class="user-dashboard-info-box table-responsive mb-0 p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Profile User</th>
                <th class="text-center">Role</th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <?php
                    for ($i=0; $i<1; $i++)
                    {
                        ?>
                            <img class="img-fluid" src="<?php   echo $array[rand(0, count($array) - 1)] ?>" alt="">
                        <?php          
                    }
                    ?>
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h6 class="mb-0"><a href="#"><?php echo $row["f_name"] ?> <?php echo $row["l_name"] ?></a></h6>
                      </div>
                        <div class="candidate-list-option">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo $row["uid"] ?></th>
                        <td><?php echo $row["username"] ?></td>
                        <td><?php echo $row["password"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["mobile"] ?></td>
                    
                        <?php
                        if (isset($_GET['delete'])){
                            $id = $_GET['delete'];
                            require 'dbcon.php';
                            $sql5 = "SELECT * FROM `users` WHERE uid=$id";
                            $result5 = $conn->query($sql5);
                            
                            if ($result5->num_rows > 0){
                              while($row = $result5->fetch_assoc()){
                                $uid = $row['uid'];
                                $name = $row['f_name'];
                                $lastname = $row['l_name'];
                                $username1 = $row['username'];
                                $password1 = $row['password'];
                                $email1 = $row['email'];
                                $mobile1 = $row['mobile'];
                                $address1 = $row['address'];
                                $jobtitle1 = $row['job_title'];
                                $dltdate = getdate();
                           
                                $arc = "INSERT INTO `arc_users`(`f_name`,`l_name`,`username`,`password`,`email`,`mobile`,`address`,`job_title`,`dltdate`) 
                                VALUES ('$name','$lastname','$username1','$password1','$email1','$mobile1','$address1','$jobtitle1', '$dltdate')";
                                $result6 = $conn->query($arc);
                              }
                            }
                            $conn->query("DELETE FROM `users` WHERE `uid`=$id") or die($mysqli->error());
                        
                            $message_successfully_deleted_user = "<center><h3 class='blue-text blue-grey darken-3 card' style='justify-content: center; padding-top: 20px; padding-bottom: 20px; padding-left:20px; padding-right:20px'>Deleted !!!</h3></center>";
                            print_r($message_successfully_deleted_user);
                            // $_SESSION['message'] = "Record has been deleted successfully !!!";
                            // $_SESSION['msg_type'] = "danger";
                            // header( "refresh:5;url=/bcx/create.php" );
                            exit();
                        }                    
                        ?>
                        </tr>
                    </tbody>
         
      </table>
                        </div>   
                    </div>
                   
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fa fa-users"></i></a>
                  <span class="candidate-list-time order-1"><?php echo $row["role"] ?></span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="user.php?uid=<?php echo $row["uid"]; ?>" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="update.php?uid=<?php echo $row["uid"]; ?>" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="index.php?delete=<?php echo $row["uid"]; ?>" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
        </tbody>
        <?php
          }
          $conn->close();
          ?>
          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
        </div>
        <!-- <div class="card-action">
          <a href="#">This is a link</a>
        </div> -->
      </div>
    </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
    
  </html>