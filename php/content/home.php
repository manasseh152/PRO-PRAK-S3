<?php
include('php/scripts/functions.php');
$sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `hidden` IS NULL ORDER BY `postID` DESC LIMIT 0, 10";
?>

<div class="posts">
  <?php 
    showPost($sql);
  ?>