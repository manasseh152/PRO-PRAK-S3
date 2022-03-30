<?php
  //destroy the session 
  session_destroy();
  //redirect to register
  header("Location: index.php?content=php/components/register");