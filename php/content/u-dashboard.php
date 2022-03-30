<?php
include("php/scripts/functions.php");
is_authorized(['root', 'admin', 'moderator', 'user']);

// userID verkrijgen via session
$user = $_SESSION['userID'];

// alle posts user
$sql = "SELECT COUNT(`postID`) AS `totalUserPost` FROM `post` WHERE `userID` = $user";
$totalUserPost = runStatement($sql);
$totalUserPost = mysqli_fetch_assoc($totalUserPost);


// alle upvote naar user
$sql = "SELECT SUM(`upvote`) as `totalUpvotes` FROM `post` WHERE `userID` = $user";
$totalUpvotes = runStatement($sql);
$totalUpvotes = mysqli_fetch_assoc($totalUpvotes);
if($totalUpvotes['totalUpvotes'] == NULL) {$totalUpvotes['totalUpvotes'] = 0;}


// totaal comments van user
$sql = "SELECT COUNT(`commentID`) as `totalComments` FROM `comments` WHERE `userID` = $user";
$totalComments = runStatement($sql);
$totalComments = mysqli_fetch_assoc($totalComments);

// all user post
$posts = "SELECT `postID`, `username`, `title`, `text`, `upvote` FROM `post` INNER JOIN `users` ON `post`.`userID` = `users`.`userID` WHERE `users`.`userID` = $user";

// alle posts
$sql = "SELECT COUNT(`postID`) AS `totalPost` FROM `post`";
$totalPost = runStatement($sql);
$totalPost = mysqli_fetch_assoc($totalPost);
if ($totalUserPost["totalUserPost"] == 0) {
  $percental = 0;
} else {
  $percental =  $totalUserPost["totalUserPost"] / $totalPost["totalPost"] * 100;
}
// echo $percental
?>

<div class="dashboard">
  <div class="u">
    <p>user dashboard</p>
  </div>
  <div class="m">
    <p>Total posts: <?= $totalUserPost["totalUserPost"] ?></p>
    <p>Total likes: <?= $totalUpvotes["totalUpvotes"] ?></p>
    <p>Total comments: <?= $totalComments["totalComments"] ?></p>
    <p>Percental of posts: <?= $percental ?>%</p>
  </div>
  <div class="p posts">
    <?php showPost($posts) ?>
  </div>
</div>