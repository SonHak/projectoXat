
<?php
include('conexionBD.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        //$passw = SHA1($password);
    // SQL query to fetch information of registerd users and finds user match.
        $query = $pdo->prepare( "select nick, password from usuarios where password ='$password' AND nick ='$username'");
        $query->execute();
        $row = $query->fetch();
        $user = $row['nick'];
        $pass = $row['password'];       
        
        if ($user == $username && $password == $pass) {
            $_SESSION['login_user']=$username; // Initializing Session
            if($user == 'admin'){
              header('location: creacioConsultes.php');
          }else{
             header("location: principal.php");
             }// Redirecting To Other Page
        } else {
            $error = "Username or Password is invalidddd".$user;
        }
    }
    echo $error;
}
?>
