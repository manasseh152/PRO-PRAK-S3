<?php

include('php/scripts/functions.php');
is_authorized(['user', 'moderator', 'admin', 'root']);

$sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `hidden` IS NULL ORDER BY `postID` DESC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `postID` ASC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `upvote` DESC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `upvode` ASC";

?>

<div class="posts">

  <div class="page-label">
    <h2>Discover</h2>
  </div>

  <?php showPost($sql); ?>

</div>