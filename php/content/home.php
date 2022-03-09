<?php
include('php/scripts/connect-db.php');
include('php/scripts/functions.php');
$sql = "SELECT `postID`, `username`, `title`, `text` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` LIMIT 0, 10";
?>

<div class="posts">
  <?php 
    showPost($sql);
  ?>