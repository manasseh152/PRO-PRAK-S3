<?php
  include("./connect-db.php");
  include("./functions.php");
  

  $user = sanitize($_POST["user"]);
  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);

  $pwh =  password_hash($password, PASSWORD_BCRYPT);

  $email = sanitize($_POST["email"]);
  $sql = "INSERT INTO `users` (`userID`,
  `name`,
  `username`,
  `password`,
  `email`,
  `userroleID`)
VALUES                  (NULL,
  '$user',
  '$username',
  '$pwh',
  '$email',
  1)";

  $result = mysqli_query($conn, $sql);

  header("Location:../../index.php");