<?php
  include("connect-db.php");
  include("functions.php");

  if (!isset($_SESSION["userID"])) {
    header("Location: index.php?content=php/content/home");
  } else {
  $postID = sanitize($_POST['postID']);
  $user = $_SESSION["userID"];
  $comment = sanitize($_POST['commentText']);
  $sql = "INSERT INTO `comments` (`commentID`, `postID`, `userID`, `comment`) VALUES (NULL, '$postID', '$user', '$comment')";
  $comments = mysqli_query($conn, $sql);
  header("Location: index.php?content=".$_POST['URL'] .'#'. $_POST["elementID"] ."");
  }