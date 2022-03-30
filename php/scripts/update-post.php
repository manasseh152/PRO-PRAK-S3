<?php
  include("php/scripts/functions.php");
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $postID = $_SESSION["postID"];
  unset($_SESSION["postID"]);
  $userID = $_SESSION["userID"];
  $title = sanitize($_POST["title"]);
  $text = sanitize($_POST["text"]);
  if (empty($userID) || empty($title) || empty($text)) {
    // if a field is empty redirect to update post
    echo "Mag niet empty";
    header("Refresh: 1.5; index.php?content=php/content/updatepost");
  } else {
    // else update the post and redirect to last know place on website
    $sql = "UPDATE `post` SET `title` = '$title', `img` = NULL, `text` = '$text' WHERE `post`.`postID` = $postID";
    runStatement($sql);
    header("Location: index.php?content=".$_POST['URL']."");
  }
  