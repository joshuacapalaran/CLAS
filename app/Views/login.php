<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="<?=base_url();?>/stemp/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>/stemp/css/style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
  </head>

<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="<?= base_url() ?>/register/save" method="post">
  <h1>Create Account</h1>
  <?php if(isset($validation)):?>
      <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
  <?php endif;?>
  <!-- <div class="social-container">
    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
    <a href="#" class="social"><i class="fa fa-google"></i></a>
    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
  </div> -->
  <span>Fill out the form</span>
  <input type="text" name="name" placeholder="Name" id="InputForName" value="<?= set_value('name') ?>">
  <input type="email" name="email" placeholder="Email" id="InputForEmail" value="<?= set_value('email') ?>">
  <input type="password" name="password" placeholder="Password" id="InputForPassword">
  <input type="password" name="cofpassword" placeholder="Confirm Password" id="InputForConfPassword">
  <button>SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
  
  <form action="<?= base_url() ?>/login/auth" method="post">
    <h1>Sign In</h1>
    <!-- <div class="social-container">
    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
    <a href="#" class="social"><i class="fa fa-google"></i></a>
    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
  </div> -->
  <span>use your account</span>
  <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
  <?php endif;?>
  <input type="email" name="email" placeholder="Email" id="InputForEmail" value="">
  <input type="password" name="password" placeholder="Password" id="InputForPassword">
  <a href="#">Forgot Your Password</a>

  <button type="submit">Sign In</button>
  </form>
</div>
<div class="overlay-container">
  <div class="overlay">
    <div class="overlay-panel overlay-left">
      <h1>Welcome Back!</h1>
      <p>To keep connected with us please login with your personal info</p>
      <button class="ghost" id="signIn">Sign In</button>
    </div>
    <div class="overlay-panel overlay-right">
      <img src="<?= base_url() ?>/stemp/img/puplogo.ico" style="width: 120px; height: 120px">
      <h1>C.L.S.A.M.S</h1>
      <p>Enter your details and start journey with us</p>
      <button class="ghost" id="signUp" href="<?=base_url();?>/app/Views/register.php">Sign Up</button>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });
  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script>


</body>
</html>