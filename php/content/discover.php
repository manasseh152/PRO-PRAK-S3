<?php

include('php/scripts/functions.php');
is_authorized(['user', 'moderator', 'admin', 'root']);

$sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `postID` DESC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `postID` ASC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `upvote` DESC";

// $sql = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` ORDER BY `upvode` ASC";

?>

<div class="posts">

  <div class="page-label">
    <h2>Discover</h2>

    <div class="dropdown wide">
      <button>sort by</button>
      <ul>
        <li><button>m</button></li>
        <li><button>m</button></li>
        <li><button>l</button></li>
        <li><button>l</button></li>
      </ul>
    </div>
  </div>

  <?php showPost($sql); ?>

</div>