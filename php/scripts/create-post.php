<?php
  include("php/scripts/functions.php");
  include("php/scripts/connect-db.php");
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $userID = $_SESSION["userID"];
  $title = sanitize($_POST["title"]);
  $text = sanitize($_POST["text"]);
  if (empty($userID) || empty($title) || empty($text)) {
    echo "Mag niet empty";
    header("Refresh: 1.5; index.php?content=php/content/createpost");
  } else {
    $sql = "INSERT INTO `post` (`postID`, `userID`, `title`, `img`, `text`, `upvote`) VALUES (NULL, '$userID', '$title', NULL, '$text', 0)";
    mysqli_query($conn, $sql);
    header("Location: index.php?content=php/content/home");
  }
