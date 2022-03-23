<?php
  include('php/scripts/functions.php');
  is_authorized('user', 'admin', 'root', 'moderator');
  $postID = sanitize($_POST["postID"]);
  $userID = $_SESSION['userID'];
  $sql = "DELETE FROM post WHERE `post`.`postID` = $postID";
  runStatement($sql);
  var_dump($_GET["content"]);
  header('Location: index.php?content='. $_POST['URL'] .'');
?>