<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';
include_once form_processor_url('/login-form.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <script src="/libs/pluslib/frontend/resubmit.js"></script>
  <script src="/libs/pluslib/frontend/password.js"></script>

</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="panel border bg-white">
          <div class="panel-heading">
            <h3 class="pt-3 font-weight-bold">Login</h3>
          </div>
          <div class="panel-body p-3">
            <?php process_form(); ?>
            <form action="" method="POST">
              <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"
                    placeholder="Username or Email" required value='<?= $uname ?? '' ?>' name='uname'> </div>
                <span class="text-danger"><?= errors('username') ?></span>
              </div>
              <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password"
                    placeholder="Enter your Password" value="<?= $pword ?? '' ?>" name="pword" required> <button
                    class="btn bg-white text-muted" id='ptog' type='button'> <span class="far fa-eye"></span>
                  </button> </div>
                <span class="text-danger"><?= errors('password') ?></span>
              </div>
              <button type="submit" name='login' class="btn btn-primary w-100 d-block mt-3">Login</button>
              <div class="text-center pt-4 text-muted">Don't have an account? <a href="/signup.php">Sign up</a>
              </div>
            </form>
          </div>
          <div class="mx-3 my-2 py-2 bordert">
            <div class="text-center py-3"> <a href="https://www.google.com" target="_blank" class="px-2"> <img
                  src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png"
                  alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img
                  src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt="">
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    togglePasswordInput('[name="pword"]', '#ptog > .far')
  </script>
</body>

</html>