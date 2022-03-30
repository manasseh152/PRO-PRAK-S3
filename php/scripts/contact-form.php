<?php
include("php/scripts/functions.php");
is_authorized(['root', 'admin', 'moderator', 'user']);
$name = sanitize($_POST["name"]);
$phoneNumber = sanitize($_POST["phone"]);
$email = sanitize($_POST["email"]);
$title = sanitize($_POST["title"]);
$content = sanitize($_POST["content"]);
if(empty($name) || empty($phoneNumber) || empty($email) || empty($title) || empty($content)) {
  echo "<script type='text/javascript'>alert('U heeft een of meer velden niet ingevuld probeer opnieuw');</script>";
  header("Refresh: 0; index.php?content=php/content/about#about-form");
} else {
  $sql = "INSERT INTO `contact` (`contactID`, `name`, `phoneNumber`, `email`, `title`, `content`) VALUES (NULL, '$name', '$phoneNumber', '$email', '$title', '$content')";
  runStatement($sql);
  echo "<script type='text/javascript'>alert('het formulier is succesvol verstuurd wij zullen zo spoedig mogelijk reageren');</script>";
  header("Reffresh: 0; index.php?content=php/content/about#about-form");
}

