<?php
var_dump($_SESSION);
  unset($_SESSION["userID"]);
  unset($_SESSION["userrole"]);
  unset($_SESSION["username"]);
  var_dump($_SESSION);
  session_destroy();
  header("Location: index.php?content=php/components/register");