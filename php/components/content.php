<?php
  if (isset($_GET["content"])) {
    include("./" . $_GET["content"] . ".php");
  } else {
    if (!isset($_SESSION["userID"])) {
      include("./php/components/login.php");
    } else {
      $_GET["content"] = './php/content/home.php';
      include("./php/content/home.php");
    }
  }
