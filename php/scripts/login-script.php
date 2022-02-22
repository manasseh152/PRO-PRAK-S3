<?php
  include("./php/scripts/connect-db.php");
  include("./php/scripts/functions.php");

  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);

  if (empty($username) || empty($password)) {
    header("Location: ../../index.php?content=php/components/login");
  } else {
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    
    $result = mysqli_query($conn, $sql);
    if (!mysqli_num_rows($result)) {
      header("Location: index.php?content=php/components/login");
    } else {
      $record = mysqli_fetch_assoc($result);
      if (!password_verify($password, $record["password"])) {
        header("Location: index.php?content=php/components/login");
      } else {
        $_SESSION["userID"] = $record["userID"];
        header("Location: index.php?content=home");
      }
    }
  }