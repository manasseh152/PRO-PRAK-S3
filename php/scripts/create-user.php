<?php
  include("./connect-db.php");
  include("./functions.php");

  $user = sanitize($_POST["user"]);
  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["password"]);
  $email = sanitize($_POST["email"]);
  $sql = "INSERT INTO `users` (`userid`, `user`, `username`, `password`, `email`) VALUES (NULL, '$user', '$username', '$password', '$email');";
  $result = mysqli_query($conn, $sql);

  header("Location:./.php");
?>