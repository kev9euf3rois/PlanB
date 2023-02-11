<?php

session_start();

include('./includes/connect.php');
include('./includes/functions.php');

$pageName = "Access";

checkLogin();

if(isset($_POST['login'])) {
  $email = htmlspecialchars($_POST['emailLogin']);
  $password = htmlspecialchars($_POST['passwordLogin']);

  if(login($email, $password)) {
    header('Location: index.php');
  }
}

if (isset($_POST['register'])) {

  $email = htmlspecialchars($_POST['emailRegister']);
  $username = htmlspecialchars($_POST['usernameRegister']);
  $password = htmlspecialchars($_POST['passwordRegister']);
  $password_repeat = htmlspecialchars($_POST['passwordRepeatRegister']);

  if (register($email, $username, $password, $password_repeat)) {
    $_SESSION['user'] = $username;
    header('Location: index.php');
    exit;
  } else {
    $error = 'Registrierung fehlgeschlagen';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <title>PlanB | <?php echo $pageName;?></title>
</head>
<body class="text-center">
<div class="container">
<?php include('./components/navbar.php');?>

<div class="container px-4 py-5">
    <img class="d-block mx-auto mb-4" src="./images/logo.png" alt="" width="72">
    <h1 class="display-5 fw-bold">Sign in</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Here at PlanB, we value your security and privacy. That's why we have implemented a secure login system to protect your personal information and ensure that only you have access to your account.</p>

    </div>
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">How to use</h1>
        <p class="col-lg-10 fs-4">We are glad you are here and want to make sure you have a seamless experience while accessing your account. Whether you are a professional or a new user, logging in is quick and easy. Simply enter your username and password in the fields provided and click "Log in".</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="name@example.com" control-id="ControlID-1">
            <label for="emailLogin">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password" control-id="ControlID-2">
            <label for="passwordLogin">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="post" name="login" control-id="ControlID-4">Sign in</button>
        </form>
      </div>
    </div>
  </div>
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="usernameRegister" name="usernameRegister" placeholder="Username" control-id="ControlID-1">
            <label for="usernameRegister">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailRegister" name="emailRegister" placeholder="name@example.com" control-id="ControlID-1">
            <label for="emailRegister">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordRegister" name="passwordRegister" placeholder="Password" control-id="ControlID-2">
            <label for="passwordRegister">Enter password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordRepeatRegister" name="passwordRepeatRegister" placeholder="Password" control-id="ControlID-2">
            <label for="passwordRepeatRegister">Repeat password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="post" name="register" control-id="ControlID-4">Sign in</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign in, you agree to the <a href="terms_of_use.php" style="text-decoration: none;">terms of use</a>.</small>
        </form>
      </div>
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Register now</h1>
        <p class="col-lg-10 fs-4">We take the protection of your personal information seriously, and use industry-standard encryption to keep your data safe. If you have any questions or concerns about the security of your account, please don't hesitate to contact us.</p>
      </div>
    </div> 
  <?php include('./components/footer.php');?>
 
</body>
</html>