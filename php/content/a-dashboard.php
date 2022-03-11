<?php
  include("php/scripts/functions.php");
  is_authorized(['root', 'admin', 'moderator']);
  
  // alle posts
  $sql = "SELECT COUNT(`postID`) AS `totalPost` FROM `post`";
  $totalPost = runStatement($sql);
  $totalPost = mysqli_fetch_assoc($totalPost);

  // alle users
  $sql = "SELECT COUNT(`userID`) AS `totalUsers` FROM `users`";
  $totalUsers = runStatement($sql);
  $totalUsers = mysqli_fetch_assoc($totalUsers);

  // aantal reports
  $sql = "SELECT COUNT(`report`) AS `totalReports` FROM `post` WHERE `report` = 1";
  $totalReports = runStatement($sql);
  $totalReports = mysqli_fetch_assoc($totalReports);

  // gereporte posts
  $reportedPost = "SELECT * FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `report` = 1";
  // run statement below where you want the reported post
  //showPost($reportedPost);

  // percentage reported post van total post
  $percentage = $totalPost["totalPost"] / $totalReports["totalReports"];
?>
<div>
  <p>Total posts: <?= $totalPost["totalPost"]; ?></p>
</div>
<div>
  <p>Total users: <?= $totalUsers["totalUsers"]; ?></p>
</div>
<div>
  <p>Total reports: <?= $totalReports["totalReports"]; ?></p>
</div>
<div>
  <p><?= $percentage; ?></p>
</div>
