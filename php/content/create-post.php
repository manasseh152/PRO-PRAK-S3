<?php
  $username = "Raoul v Wijk";
  $upvotes = 6;

  $commenttitle = "test";
  $commenttext = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, quaerat.";

?>
  <div class="post create">
    <div class="post-header">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="24" height="24" rx="12" fill="#D7D7D7"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9959 21.7509C17.0264 23.1664 14.6105 24 12 24C8.93576 24 6.13978 22.8515 4.01904 20.9614C4.29511 17.0707 7.53896 14 11.5 14C15.6421 14 19 17.3579 19 21.5C19 21.5839 18.9986 21.6676 18.9959 21.7509Z" fill="#BFBCBC"/>
        <rect x="7" y="6" width="9" height="9" rx="4.5" fill="#BDBCBC"/>
      </svg>
      <p><?php echo $username; ?></p>
    </div>
    <div class="post-body">
      <input class="post-title" type="text">
      <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
  </div>