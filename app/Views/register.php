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
    <title>Register</title>
  </head>

<body>

      <div class="container" id="container">
        <!--  -->
        <div class="form-container sign-in-container">
          <form action="<?= base_url() ?>/register/save" method="post">
            <h2>Create Account</h2>
            <span>Fill out the form</span>
            <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif;?>
          
                <input type="text" name="name" placeholder="Name" class="form-label" id="InputForName" value="<?= set_value('name') ?>">
                <input type="email" name="email" placeholder="Email"class="form-label" id="InputForEmail" value="<?= set_value('email') ?>">
                <input type="password" name="password" placeholder="Password" class="form-label" id="InputForPassword">
                <input type="password" name="confpassword" placeholder="Confirm Password"class="form-label" id="InputForConfPassword">
                    
              <button type="submit"> Register</button>
            </form>
          </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-right">
              <img src="<?= base_url() ?>/stemp/img/puplogo.ico" style="width: 120px; height: 120px">
              <h1>C.L.S.A.M.S</h1>
              <p>Enter your details and start journey with us</p>
              <button class="ghost">
              <a href="<?php echo base_url('login') ?>" style="color: WHITE">Sign in</a></button>
            </div>
          </div>
        </div>
      </div>

<!-- <script type="text/javascript">
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });
  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script> -->


</body>
</html>