<?php
  include("php/scripts/connect-db.php");
  include("php/scripts/functions.php");
  

  $user = sanitize($_POST["user"]);
  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);
  $passwordCheck = sanitize($_POST['passwordCheck']);
  $email = sanitize($_POST["email"]);
  if(empty($user) || empty($username) || empty($password) || empty($passwordCheck) || empty($email)) {
    echo "<script type='text/javascript'>alert('U heeft een of meer velden niet ingevuld');</script>";
    header("Refresh: 0; index.php?content=php/components/register");
  } 
  else {
    if($password == $passwordCheck) {
      $pwh =  password_hash($password, PASSWORD_BCRYPT);
      
        
        $sql = "INSERT INTO `users` (`userID`,
        `name`,
        `username`,
        `password`,
        `email`,
        `userrole`)
      VALUES                  (NULL,
        '$user',
        '$username',
        '$pwh',
        '$email',
        'user')";

        $result = mysqli_query($conn, $sql);
        echo "<script type='text/javascript'>alert('Uw account is gemaakt');</script>";
        header("Refresh: 0; index.php?content=php/components/login");
    } else {
      echo "<script type='text/javascript'>alert('uw ingevulde wachtwoorden komen niet overeen');</script>";
      header("Refresh: 0; index.php?content=php/components/register");
    }
  }
  