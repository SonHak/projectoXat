<?php
    include('conexionBD.php');

    session_start();// Starting Session
    // Storing Session
    $user_check=$_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $query = $pdo->prepare("select id_usuario, nick, email from usuarios where nick='$user_check'");
    $query->execute();
    $row = $query->fetch();
    $login_session =$row['nick'];
    $id_session =$row['id_usuario'];
    $email_session =$row['email'];

    if(!isset($login_session)){
        $pdo=null; // Closing Connection      
        header('Location: index.php'); // Redirecting To Home Page
    }
?>