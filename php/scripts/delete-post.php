<?php
  include('php/scripts/functions.php');
  $postID = sanitize($_POST["postID"]);
  $userID = $_SESSION['userID'];
  $sql = "DELETE FROM post WHERE `post`.`postID` = $postID AND `post`.`userID` = $userID";
  runStatement($sql);
  var_dump($_GET["content"]);
  header('Location: index.php?content='. $_POST['URL'] .'');
?>