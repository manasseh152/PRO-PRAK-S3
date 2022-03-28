<?php
  include('php/scripts/functions.php');

  $URL = $_POST['URL'];
  $username = sanitize($_POST['username']);
  $sql = "DELETE FROM users WHERE `username` = '$username'";
  runStatement($sql);
  header('Location: index.php?content='. $URL .'');
?>