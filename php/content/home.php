<?php
include('php/scripts/functions.php');
$sql = "SELECT `postID`, `username`, `title`, `text` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `postID` DESC LIMIT 0, 10";
?>

<div class="posts">
  <?php 
    showPost($sql);
  ?>