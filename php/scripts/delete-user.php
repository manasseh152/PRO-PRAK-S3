<?php
  include('php/scripts/functions.php');
  is_authorized(['root', 'admin']);
  $URL = $_POST['URL'];
  $username = sanitize($_POST['username']);
  if(empty($username)) {
    // if username is empty no user is selected redirect to last known place on website
    echo "<script type='text/javascript'>alert('Er is geen user geselecteerd probeer opnieuw');</script>";
    header('Refresh: 0; index.php?content='. $URL .'');
  } 
  else {
    if($username == $_SESSION['username']) {
      // if current user = user he is trying to delete error('cannot remove yourself') redirect to last known place
      echo "<script type='text/javascript'>alert('U kunt uzelf niet verwijderen');</script>";
      header('Refresh: 0; index.php?content='. $URL .'');
    } else {
      // delete user from database
      $sql = "DELETE FROM users WHERE `username` = '$username'";
      runStatement($sql);
      echo "<script type='text/javascript'>alert('De user is succesvol verwijderd');</script>";
      header('Refresh: 0; index.php?content='. $URL .'');
    }
  }
  
?>
      