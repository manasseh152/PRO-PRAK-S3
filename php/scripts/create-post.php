<?php
  include("php/scripts/functions.php");
  include("php/scripts/connect-db.php");

  $userID = $_SESSION["userID"];
  $title = sanitize($_POST["title"]);
  $text = sanitize($_POST["text"]);
  $sql = "INSERT INTO `post` (`postID`, `userID`, `title`, `img`, `text`, `upvote`) VALUES (NULL, '$userID', '$title', NULL, '$text', 0)";
  mysqli_query($conn, $sql);
  header("Location: index.php?content=php/content/home");
