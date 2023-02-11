<?php
function checkLogin()
{
    if (isset($_SESSION['user'])) {
        header('Location: index.php');
        exit;
      }
}
function checkNotLogin()
{
    if (!isset($_SESSION['user'])) {
        header('Location: index.php');
        exit;
      }
}
function login($email, $password)
  {
    if (empty($email) || empty($password)) {
      return false;
    }

    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    if (!$user) {
      return false;
    }

    if (!array_key_exists('password_hash', $user)) {
      return false;
    }
    
    if (!password_verify($password, $user['password_hash'])) {
      return false;
    }
    
    $_SESSION['user'] = $user['username'];
    return true;
  }

  function register($email, $username, $password, $password_repeat)
  {

    if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
      return false;
    }
    if ($password != $password_repeat) {
      return false;
    }

    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    if ($stmt->rowCount() > 0) {
      return false;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (id, email, username, password_hash, created_at) VALUES (DEFAULT, ?, ?, ?, CURRENT_TIMESTAMP)");
    $stmt->execute([$email, $username, $hashed_password]);

    return true;
  }

  function logout()
  {
    session_start();
    session_destroy();
    header('Location:index.php');
  }
?>
