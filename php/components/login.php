<div class="test">
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
      <p>You are not a member? <a <?php echo ($active == "register" )? "active" : "" ?>" href="index.php?content=./php/components/register">SignUp</a></p>
      <p>Stay as <a <?php echo ($active == "home" )? "active" : "" ?>" href="index.php?content=./php/content/home">Guest</a></p>
    </div>
  </div>
  </div>