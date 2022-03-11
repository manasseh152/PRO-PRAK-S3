<?php
  include("php/scripts/functions.php");
  is_authorized(['root', 'admin', 'moderator', 'user']);

  // userID verkrijgen via session
  $user = $_SESSION['userID'];

  // alle posts user
  $sql = "SELECT COUNT(`postID`) AS `totalUserPost` FROM `post` WHERE `userID` = $user";
  $totalUserPost = runStatement($sql);
  $totalUserPost = mysqli_fetch_assoc($totalUserPost);
  echo $totalUserPost["totalUserPost"];

  // alle upvote naar user
  $sql = "SELECT SUM(`upvote`) as `totalUpvotes` FROM `post` WHERE `userID` = $user";
  $totalUpvotes = runStatement($sql);
  $totalUpvotes = mysqli_fetch_assoc($totalUpvotes);
  // echo $totalUpvotes["totalUpvotes"];

  // totaal comments van user
  $sql = "SELECT COUNT(`commentID`) as `totalComments` FROM `comments` WHERE `userID` = $user";
  $totalComments = runStatement($sql);
  $totalComments = mysqli_fetch_assoc($totalComments);
  // echo $totalComments["totalComments"];

  // alle posts
  $sql = "SELECT COUNT(`postID`) AS `totalPost` FROM `post`";
  $totalPost = runStatement($sql);
  $totalPost = mysqli_fetch_assoc($totalPost);
  // echo $totalPost["totalPost"];
  if ($totalUserPost["totalUserPost"] = 0) {
    echo "niet mogelijk";
  } else {
  $percental =  $totalUserPost["totalUserPost"] / $totalPost["totalPost"] * 100;}
  // echo $percental
?>
