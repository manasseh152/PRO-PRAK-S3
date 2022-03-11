<?php
  include("php/scripts/functions.php");
  is_authorized(['root', 'admin', 'moderator']);
  
  // alle posts
  $sql = "SELECT COUNT(`postID`) AS `totalPost` FROM `post`";
  $totalPost = runStatement($sql);
  $totalPost = mysqli_fetch_assoc($totalPost);
  echo $totalPost["totalPost"];
  // alle users
  $sql = "SELECT COUNT(`userID`) AS `totalUsers` FROM `users`";
  $totalUsers = runStatement($sql);
  $totalUsers = mysqli_fetch_assoc($totalUsers);
  // echo $totalUsers["totalUsers"];
  // aantal reports
  $sql = "SELECT COUNT(`report`) AS `totalReports` FROM `post` WHERE `report` = 1";
  $totalReports = runStatement($sql);
  $totalReports = mysqli_fetch_assoc($totalReports);
  echo $totalReports["totalReports"];
  // gereporte posts
  // $sql = "SELECT * FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `report` = 1";
  // showPost($sql);
  $percentage = $totalPost["totalPost"] / $totalReports["totalReports"];
  echo $percentage;
?>