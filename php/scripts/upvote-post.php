<?php
include('php/scripts/functions.php');
  $postID = sanitize($_POST['postID']);
  $elementID = sanitize($_POST['elementID']);
  $URL = sanitize($_POST['URL']);
  if(empty($postID)) {
    echo "<script type='text/javascript'>alert('Er is geen post geselecteerd om te upvoten');</script>";
    header('Refresh: 0; index.php?content='. $URL + $elementID .'');
  } else {
    $totalUpvotePost = "SELECT `upvote` FROM `post` WHERE `postID` = $postID";
    $totalUpvotePost = runStatement($totalUpvotePost);
    $totalUpvotePost = mysqli_fetch_assoc($totalUpvotePost);
    $totalUpvotePost['upvote'] = $totalUpvotePost['upvote'] + 1;
    $upvote = $totalUpvotePost['upvote'];
    $sql = "UPDATE `post` SET `upvote` = '$upvote' WHERE `post`.`postID` = $postID";
    runStatement($sql);
    if($URL == 'php/content/u-dashboard' || $URL == 'php/content/a-dashboard')  {
      header('Location: index.php?content='. $URL .''); 
    } else {
      header('Location: index.php?content='. $URL .'#'. $elementID .''); 
    }
    
  }
?>