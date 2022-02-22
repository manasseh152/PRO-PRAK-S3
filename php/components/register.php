<div class="test">
<div class="register">
    <h1>SignUp</h1>
    <form action="./php/scripts/create-user.php" method="post">
      <div class="inputs">
        <input class="input" type="text" name="user" class="" value="" placeholder="Name">

        <input class="input" type="text" name="username" class="" value="" placeholder="Username">

        <input class="input" type="password" name="password" class="" value="" placeholder="Password">

        <input class="input" type="email" name="email" class="" value="" placeholder="E-mail">
      </div>

      <input class="btn-1" type="submit" value="SignUp">
    </form>
    <div class="login">
      <p>You are a member? <a <?php echo ($active == "login" )? "active" : "" ?>" href="index.php?content=./php/components/login">Login</a></p>
      <p>Stay as <a <?php echo ($active == "home" )? "active" : "" ?>" href="index.php?content=./php/content/home">Guest</a></p>
    </div>
  </div>
  </div>