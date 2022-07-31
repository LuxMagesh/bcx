<?php
$message_succesful_login = '';
if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE ( role ='Admin' AND username ='$username' AND password ='$password') ";

    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION['role'] = 'Admin';
        // redirect to Admin
        header( "refresh:2;url=http://bcx.42web.io/success.php" );
        exit();

        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
          
    }
} 

if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE ( role ='Support' AND username ='$username' AND password ='$password') ";

    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION['role'] = 'Support';
        // redirect to Admin
        header( "refresh:2;url=http://bcx.42web.io/create_support.php" );
        exit();

        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
          
    }
}
if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE ( role ='Manager' AND username ='$username' AND password ='$password') ";

    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION['role'] = 'Manager';
        // redirect to Admin
        header( "refresh:2;url=http://bcx.42web.io/create_manager.php" );
        exit();

        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
          
    }
} 
if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE ( role ='User' AND username ='$username' AND password ='$password') ";

    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION['role'] = 'User';
        // redirect to Admin
        header( "refresh:2;url=http://bcx.42web.io/create_user.php" );
        exit();

        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
          
    }
}
if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE ( role ='Custom' AND username ='$username' AND password ='$password') ";

    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        $_SESSION['role'] = 'Custom';
        // redirect to Admin
        header( "refresh:2;url=http://bcx.42web.io/create_manager.php" );
        exit();

        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
          
    }
}
?>