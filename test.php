<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style\css\style.css">
  
</head>
<body class="dark">
  <div class="register">
    <h1>SignUp</h1>
    <form action="./create-user.php" method="post">
      <div class="inputs">
        <input class="input" type="text" name="user" class="" value="" placeholder="Name">

        <input class="input" type="text" name="username" class="" value="" placeholder="Username">

        <input class="input" type="password" name="password" class="" value="" placeholder="Password">

        <input class="input" type="email" name="email" class="" value="" placeholder="E-mail">
      </div>

      <input class="btn-1" type="submit" value="SignUp">
    </form>
    <div class="login">
      <p>You are a member? <a href="#">Login</a></p>
      <p>Stay as <a href="#">Guest</a></p>
    </div>
  </div>
  <div class="register">
    <h1>SignIn</h1>
    <form action="./create-user.php" method="post">
      <div class="inputs">

        <input class="input" type="text" name="username" class="" value="" placeholder="Username">

        <input class="input" type="password" name="password" class="" value="" placeholder="Password">

      </div>

      <input class="btn-1" type="submit" value="SignIn">
    </form>
    <div class="login">
      <p>You are not a member? <a href="#">SignUp</a></p>
      <p>Stay as <a href="#">Guest</a></p>
    </div>
  </div>
</body>
</html>