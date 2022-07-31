<?php
 include 'dbcon.php';

 $message_successfully_updated_user = '';
 if ( isset( $_POST['update'] ) )
 {
     $uid=$_POST['uid'];
     $fname=$_POST['f_name'];
     $lname=$_POST['l_name'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $address=$_POST['address'];
     $jobtitle=$_POST['job_title'];
     $role=$_POST['role'];

     $sql4 = "UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`username`='$username',`password`='$password',`email`='$email',`mobile`='$mobile',`address`='$address',`job_title`='$jobtitle',`role`='$role' WHERE `uid`='$uid'";
     $result3 = $conn->query($sql4);
     if ($result3 === TRUE) {
     $result3 = $conn->query($sql4);
        $sql6 = "UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`username`='$username',`password`='$password',`email`='$email',`mobile`='$mobile',`address`='$address',`job_title`='$jobtitle',`role`='$role' WHERE `uid`='$uid'";
        $result4 = $conn->query($sql6);

        $message_successfully_updated_user = "<center><h1 class='white-text card'>Record has been updated successfully !!!</h1></center>";
        print_r($message_successfully_updated_user);
        switch ($_SESSION['role']) {
          case 'Admin':
              $_SESSION['role'] = 'Admin';
              // redirect to Admin
              header( "refresh:2;url=http://bcx.42web.io/create.php" );
              exit();
              break;
          case 'Support':
              $_SESSION['role'] = 'Support';
              // redirect to Support
              header( "refresh:5;url=http://bcx.42web.io/create_support.php" );
              exit();
              break;
          case 'Manager':
              $_SESSION['role'] = 'Manager';
              // redirect to Manager
              header( "refresh:2;url=http://bcx.42web.io/create_manager.php" );
              exit();
              break;
          case 'User':
                  $_SESSION['role'] = 'User';
                  // redirect to User
                  header( "refresh:2;url=http://bcx.42web.io/create_user.php" );
                  exit();
                  break;
          case 'Custom':
                  $_SESSION['role'] = 'Custom';
                  // redirect to Custom
                  header( "refresh:2;url=http://bcx.42web.io/create_support.php" );
                  exit();
                  break; 
          default:  
                  header( "refresh:2;url=http://bcx.42web.io/create_support.php" );
                  exit();
  }

     } 
  else {
    echo "Error updating record: " . $conn->error;
  }
  }

?>