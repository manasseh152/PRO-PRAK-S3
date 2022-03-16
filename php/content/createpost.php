<?php
include("php/scripts/functions.php");
is_authorized(['user', 'moderator', 'admin', 'root']);
?>

<form action="index.php?content=php/scripts/create-post" method="post">
  <div class="post create">
    <div class="post-header">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="24" height="24" rx="12" fill="#D7D7D7" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9959 21.7509C17.0264 23.1664 14.6105 24 12 24C8.93576 24 6.13978 22.8515 4.01904 20.9614C4.29511 17.0707 7.53896 14 11.5 14C15.6421 14 19 17.3579 19 21.5C19 21.5839 18.9986 21.6676 18.9959 21.7509Z" fill="#BFBCBC" />
        <rect x="7" y="6" width="9" height="9" rx="4.5" fill="#BDBCBC" />
      </svg>
      <p><?php echo $_SESSION["username"]; ?></p>
      <a class="dots" href="">
        <svg width="16" height="4" viewBox="0 0 16 4" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0ZM14 0C12.9 0 12 0.9 12 2C12 3.1 12.9 4 14 4C15.1 4 16 3.1 16 2C16 0.9 15.1 0 14 0ZM8 0C6.9 0 6 0.9 6 2C6 3.1 6.9 4 8 4C9.1 4 10 3.1 10 2C10 0.9 9.1 0 8 0Z" />
        </svg>
      </a>
    </div>
    <div class="post-body">
      <input type="text" name="title" placeholder="title">
      <textarea name="text" id="textarea" cols="30" rows="25" placeholder="type hier je verhaal"></textarea>
    </div>
    <div class="post-comments">
      <input type="submit">
    </div>
  </div>
</form>