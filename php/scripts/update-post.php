<?php
  include("php/scripts/functions.php");
  include("php/scripts/connect-db.php");

  $postID = $_SESSION["postID"];
  unset($_SESSION["postID"]);
  $userID = $_SESSION["userID"];
  $title = sanitize($_POST["title"]);
  $text = sanitize($_POST["text"]);
  if (empty($userID) || empty($title) || empty($text)) {
    echo "Mag niet empty";
    header("Refresh: 1.5; index.php?content=php/content/createpost");
  } else {
    $sql = "UPDATE `post` SET `title` = '$title', `img` = NULL, `text` = '$text' WHERE `post`.`postID` = $postID";
    runStatement($sql);
    header("Location: index.php?content=php/content/home");
  }
  