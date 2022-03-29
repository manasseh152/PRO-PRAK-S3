<?php
include("php/scripts/functions.php");
$sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `hidden` = 1 ORDER BY `postID` DESC LIMIT 0, 10";
?>
<div class="about-form">
  <div class="posts">
    <div class="page-label">
      <h2>About</h2>
    </div>

    <?php showPost($sql); ?>

    <form action="index.php?content=php/scripts/contact-form" method="POST">
      <div>
        user
      </div>
      <div class="form">
        <input type="text" name="name" id="name" placeholder="Fullname">
        <input type="text" name="phone" id="phone" placeholder="Phonenumber">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="text" name="title" id="title" placeholder="Title">
        <textarea name="content" id="textarea" cols="30" rows="10" placeholder="Content"></textarea>
        <div>
          <input type="submit">
          <input type="reset">
        </div>
      </div>
    </form>
  </div>


</div>