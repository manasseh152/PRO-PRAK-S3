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
  <div class="post">
    <div class="post-header">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="24" height="24" rx="12" fill="#D7D7D7"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9959 21.7509C17.0264 23.1664 14.6105 24 12 24C8.93576 24 6.13978 22.8515 4.01904 20.9614C4.29511 17.0707 7.53896 14 11.5 14C15.6421 14 19 17.3579 19 21.5C19 21.5839 18.9986 21.6676 18.9959 21.7509Z" fill="#BFBCBC"/>
        <rect x="7" y="6" width="9" height="9" rx="4.5" fill="#BDBCBC"/>
      </svg>
      <p><?= $_SESSION["username"] ?></p>
    </div>
    <form action="index.php?content=php/scripts/contact-form" method="POST">
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

</div>