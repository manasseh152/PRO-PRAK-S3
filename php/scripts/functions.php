<?php
function sanitize($raw_data) {

      global $conn;
      $data = mysqli_real_escape_string($conn, $raw_data);
      $data = htmlspecialchars($data);
      return $data;
    }


    function is_authorized($userroles) {
      if (!isset($_SESSION["id"])) {
        return header("Location: ./index.php?content=message&alert=auth-error");
      } elseif (!in_array($_SESSION["userrole"], $userroles)) {
        return header("Location: ./index.php?content=message&alert=auth-error-userrole");
      } else {
        return true;
      }
    }