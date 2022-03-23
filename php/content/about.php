<?php
include("php/scripts/functions.php");
  $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `hidden` = 1 ORDER BY `postID` DESC LIMIT 0, 10";
?>
<div class="posts">
  <?php showPost($sql); ?>

  <form action="index.php?content=php/scripts/contact-form" method="POST">
  <input type="text" name="name">
  <input type="text" name="phone">
  <input type="email" name="email">
  <input type="text" name ="title">
  <textarea name="content" id="textarea" cols="30" rows="10"></textarea>
  <input type="submit">
  <input type="reset">
</form>
</div>
