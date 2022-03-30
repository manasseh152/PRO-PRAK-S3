<?php
  include('php/scripts/functions.php');
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $postID = sanitize($_POST['postID']);
  $URL = $_POST['URL'];
  if (empty($postID)) {
    // if no postID is given redirct to discover page
    echo "<script type='text/javascript'>alert('Geen post geselecteerd om te reporten');</script>";
    header('Refresh: 0; index.php?content=php/content/discover');
  } else {
    // else get report from date
    $sql = "SELECT report FROM `post` WHERE `post`.`postID` = $postID";
    $isReported = runStatement($sql);
    $report = mysqli_fetch_assoc($isReported);
    if ($report['report'] == 1) {
      // if report = 1 post is already reported redirect to the last known place on website
      echo "<script type='text/javascript'>alert('De geselecteerde post is al gereport');</script>";
      header('Refresh: 0; index.php?content='. $URL .'');
    } else {
      // else update report column from the post to 1
      $sql = "UPDATE `post` SET `report` = '1' WHERE `post`.`postID` = $postID";
      runStatement($sql);
      // error message
      echo "<script type='text/javascript'>alert('de geselecteerde post is gereport we zullen er zo spoedig mogelijk naar kijken');</script>";
      // once closed redirect to last known place
      header('Refresh: 0; index.php?content='. $URL .'');
    }
  }
?>