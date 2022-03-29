<?php
  include('php/scripts/functions.php');
  $postID = sanitize($_POST['postID']);
  $URL = $_POST['URL'];
  if (empty($postID)) {
    echo "<script type='text/javascript'>alert('Geen post geselecteerd om te reporten');</script>";
    header('Refresh: 0; index.php?content=php/content/discover');
  } else {
    $sql = "SELECT report FROM `post` WHERE `post`.`postID` = $postID";
    $isReported = runStatement($sql);
    $report = mysqli_fetch_assoc($isReported);
    if ($report['report'] == 1) {
      echo "<script type='text/javascript'>alert('De geselecteerde post is al gereport');</script>";
      header('Refresh: 0; index.php?content='. $URL .'');
    } else {
      $sql = "UPDATE `post` SET `report` = '1' WHERE `post`.`postID` = $postID";
      runStatement($sql);
      echo "<script type='text/javascript'>alert('de geselecteerde post is gereport we zullen er zo spoedig mogelijk naar kijken');</script>";
      header('Refresh: 0; index.php?content='. $URL .'');
    }
  }
?>