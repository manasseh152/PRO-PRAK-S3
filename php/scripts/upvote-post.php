<?php
  include('php/scripts/functions.php');
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $postID = sanitize($_POST['postID']);
  $elementID = sanitize($_POST['elementID']);
  $URL = sanitize($_POST['URL']);
  if(empty($postID)) {
    // if no postID resend to last known place on website
    echo "<script type='text/javascript'>alert('Er is geen post geselecteerd om te upvoten');</script>";
    header('Refresh: 0; index.php?content='. $URL + $elementID .'');
  } else {
    // else add +1 to the upvote in the database
    $totalUpvotePost = "SELECT `upvote` FROM `post` WHERE `postID` = $postID";
    $totalUpvotePost = runStatement($totalUpvotePost);
    $totalUpvotePost = mysqli_fetch_assoc($totalUpvotePost);
    $totalUpvotePost['upvote'] = $totalUpvotePost['upvote'] + 1;
    $upvote = $totalUpvotePost['upvote'];
    $sql = "UPDATE `post` SET `upvote` = '$upvote' WHERE `post`.`postID` = $postID";
    runStatement($sql);
    if($URL == 'php/content/u-dashboard' || $URL == 'php/content/a-dashboard')  {
      // if $URL is from u-dshboard or a-dashboard remove the elementID from the header
      header('Location: index.php?content='. $URL .''); 
    } else {
      // resend user to the post where he upvoted it
      header('Location: index.php?content='. $URL .'#'. $elementID .''); 
    }
    
  }
?>