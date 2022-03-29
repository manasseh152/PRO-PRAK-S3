<?php
  include('php/scripts/functions.php');
  is_authorized(['root', 'admin', 'moderator', 'user']);
  $postID = sanitize($_POST["postID"]);
  if(empty($postID)) {
    echo "<script type='text/javascript'>alert('Er is geen post geselecteerd probeer opnieuw');</script>";
    header('Refresh: 0; index.php?content='. $URL .'');
  } else {
    $sql = "SELECT userID FROM `post` WHERE `postID` = $postID";
    $userID = runStatement($sql);
    $userID = mysqli_fetch_assoc($userID);
    if($_SESSION['userrole'] == 'admin' || $_SESSION['userrole'] == 'root' || $userID == $_SESSION['userID']) {
      $sql = "DELETE FROM post WHERE `post`.`postID` = $postID";
      runStatement($sql);
      echo "<script type='text/javascript'>alert('De post is succesvol verwijderd');</script>";
      header('Refresh: 0; index.php?content='. $_POST['URL'] .'');
    } else {
      echo "<script type='text/javascript'>alert('U mag deze post niet verwijderen');</script>";
      header('Refresh: 0; index.php?content=php/content/discover');
    }
    
  }
?>