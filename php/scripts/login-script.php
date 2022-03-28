<?php
  include("./php/scripts/connect-db.php");
  include("./php/scripts/functions.php");

  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);

  if (empty($username) || empty($password)) {
    echo "<script type='text/javascript'>alert('U heeft een of meer velden niet ingevuld');</script>";
    header("Refresh: 0; ../../index.php?content=php/components/login");
  } else {
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    
    $result = mysqli_query($conn, $sql);
    if (!mysqli_num_rows($result)) {
      echo "<script type='text/javascript'>alert('Uw account bestaat nog niet');</script>";
      header("Refresh: 0; index.php?content=php/components/register");
    } else {
      $record = mysqli_fetch_assoc($result);
      if (!password_verify($password, $record["password"])) {
        echo "<script type='text/javascript'>alert('Uw wachtwoord komt niet overeen');</script>";
        header("Refresh: 0; index.php?content=php/components/login");
      } else {
        echo "<script type='text/javascript'>alert('U bent succesvol ingelogd');</script>";
        $_SESSION["userID"] = $record["userID"];
        $_SESSION["userrole"] = $record['userrole'];
        $_SESSION["username"] = $record["username"];
        header("Refresh: 0; index.php?content=php/content/home");
      }
    }
  }