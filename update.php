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
          <div class="card-panel  cyan darken-4">
            <span class="white-text" style="font-size:x-large ;font-weight:bolder;"> <i class="small material-icons">person_add</i>Update User
          </span>
          </div>
                <p>Edit the fields on the form below and click update user to change the new user's details</p>
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
              <?php
                  require 'dbcon.php';
                  if (isset($_GET['uid'])){
                    $uid = $_GET['uid'];
                    
                    $sql5 = "SELECT * FROM `users` WHERE uid=$uid";
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
                        $role = $row['role'];
						
         
          ?>
          <form class="" action="scriptupdate.php" method="POST">
              <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="hidden" name="uid" class="validate" value="<?php print_r($uid); ?>" id="uid" placeholder="   User id"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                          <input type="text" name="f_name" pattern="[A-Za-z]*" class="validate" value="<?php echo print_r($name); ?>" id="f_name" placeholder="   Firstname"/>
                          <span id="c1" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                            <input type="text" name="l_name" pattern="[A-Za-z]*" class="validate" value="<?php echo print_r($lastname); ?>" id="l_name" placeholder="    Lastname"/>
                            <span id="c2" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="username" value="<?php echo print_r($username1); ?>" id="username" placeholder="   Username"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="password" name="password" value="<?php echo print_r($password1); ?>" id="password" placeholder="   Password 8+ characters / special incl."/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="email" value="<?php echo print_r($email1); ?>" id="email" placeholder="    Email">
                              <span id="c4" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="mobile" value="<?php echo print_r($mobile1); ?>" id="mobile" placeholder="   Mobile Number"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="address" value="<?php echo print_r($address1); ?>" id="address" placeholder="   Address"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                              <input type="text" name="job_title" value="<?php echo print_r($jobtitle1); ?>" id="job_title" placeholder="   Job Title"/>
                              <span id="c3" class="glyphicon glyphicon-envelope"></span>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="txt s12 m12 xs12">
                    <select name="role" id="role" placeholder="   Role" class="browser-default">
                        <option value="<?php echo print_r($role); ?>" disabled selected>Update User Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Support</option>
                        <option value="3">Manager</option>
                        <option value="2">User</option>
                        <option value="3">Custom</option>
                    </select> 
      
                    </div>
                  </div> 
                  <div class="btnsub">
                                  <div class="Update User">
                                          <input type="submit" name="update" id="btnsub3" value="Update User"/>
                                  </div>                
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
            
		   <?php
                }
            }
          }
        ?>
          </div>

          <div class="ContentTwo col s12 m8 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
      <div class="card-panel cyan darken-4">
        <span class="white-text" style="font-size:x-large ;font-weight:bolder"><i class="small material-icons">list</i>User Records</span>
      </div>
      <div class="card-panel white-text blue-grey darken-3" style="font-size:small; font-style: oblique;">
        <?php 
          require 'dbcon.php';
          $sql = "SELECT * FROM `users`";
          $result = $conn->query($sql);
        ?>
      <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Surname</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Address</th>
              <th scope="col">Job-Title</th>
              
              <th scope="col">Role</th>
            </tr>
          </thead>
          <?php
            while ($row = $result->fetch_assoc()) {
          ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $row["uid"] ?></th>
              <td><?php echo $row["f_name"] ?></td>
              <td><?php echo $row["l_name"] ?></td>
              <td><?php echo $row["username"] ?></td>
              <td><?php echo $row["password"] ?></td>
              <td><?php echo $row["email"] ?></td>
              <td><?php echo $row["mobile"] ?></td>
              <td><?php echo $row["address"] ?></td>
              <td><?php echo $row["job_title"] ?></td>
              <td><?php echo $row["role"] ?></td>
            </tr>
          </tbody>
          <?php
          }
          $conn->close();
          ?>
      </table>
      
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