<?php
include("php/scripts/functions.php");
$name = sanitize($_POST["name"]);
$phoneNumber = sanitize($_POST["phone"]);
$email = sanitize($_POST["email"]);
$title = sanitize($_POST["title"]);
$content = sanitize($_POST["content"]);

$sql = "INSERT INTO `contact` (`contactID`, `name`, `phoneNumber`, `email`, `title`, `content`) VALUES (NULL, '$name', '$phoneNumber', '$email', '$title', '$content')";
runStatement($sql);
header("Location: index");
