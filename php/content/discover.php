<?php
include('php/scripts/functions.php');
is_authorized(['user', 'moderator', 'admin', 'root']);
$sql = "SELECT `postID`, `username`, `title`, `text` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `postID` DESC";
?>

<div class="posts">
  <?php 
    showPost($sql);
  ?>