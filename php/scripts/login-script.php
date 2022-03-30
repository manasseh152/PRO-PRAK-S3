<?php
  include("./php/scripts/connect-db.php");
  include("./php/scripts/functions.php");

  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);

  if (empty($username) || empty($password)) {
    // if one of the field is empty redirect to login
    echo "<script type='text/javascript'>alert('U heeft een of meer velden niet ingevuld');</script>";
    header("Refresh: 0; ../../index.php?content=php/components/login");
  } else {
    // select the user login credentials from database
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    
    $result = mysqli_query($conn, $sql);
    if (!mysqli_num_rows($result)) {
      // if no rows account doesnt exist
      echo "<script type='text/javascript'>alert('Uw account bestaat nog niet');</script>";
      // redirect to register
      header("Refresh: 0; index.php?content=php/components/register");
    } else {
      $record = mysqli_fetch_assoc($result);
      if (!password_verify($password, $record["password"])) {
        // if true password doesnt match
        echo "<script type='text/javascript'>alert('Uw wachtwoord komt niet overeen');</script>";
        // redirect to login
        header("Refresh: 0; index.php?content=php/components/login");
      } else {
        // succesfully logged in
        echo "<script type='text/javascript'>alert('U bent succesvol ingelogd');</script>";
        // starts the sessions
        $_SESSION["userID"] = $record["userID"];
        $_SESSION["userrole"] = $record['userrole'];
        $_SESSION["username"] = $record["username"];
        // redirect to home page
        header("Refresh: 0; index.php?content=php/content/home");
      }
    }
  }