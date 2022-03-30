<?php
  include("connect-db.php");
  include("functions.php");
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $URL = $_POST['URL'];
  if (!isset($_SESSION["userID"])) {
    header("Location: index.php?content=php/content/home");
  } else {
  $postID = sanitize($_POST['postID']);
  $user = $_SESSION["userID"];
  $comment = sanitize($_POST['commentText']);
  $sql = "INSERT INTO `comments` (`commentID`, `postID`, `userID`, `comment`) VALUES (NULL, '$postID', '$user', '$comment')";
  $comments = mysqli_query($conn, $sql);
  if($URL == 'php/content/u-dashboard' || $URL == 'php/content/a-dashboard')  {
    header('Location: index.php?content='. $URL .''); 
  } else {
    header('Location: index.php?content='. $URL .'#'. $elementID .''); 
  }
  }