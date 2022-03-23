<?php
  $active = (isset($_GET["content"]))? $_GET["content"]: "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dabay</title>
  <link rel="stylesheet" href="./style/css/style.css">
  <link rel="shortcut icon" href="./img/svg/Nederland vlag.svg" type="image/x-icon">
  <script defer src="./js/app.js"></script>
</head>

<body class="<?php echo ($active == "php/content/a-dashboard" || $active == "php/content/u-dashboard" || $active == "php/components/login" || $active == "php/components/register")? "big" : "" ?>">
  <?php include("./php/components/navbar.php"); ?>

  <main>
    <?php include("./php/components/content.php"); ?>
  </main>

  <?php include("./php/components/footer.php"); ?>
</body>

</html>