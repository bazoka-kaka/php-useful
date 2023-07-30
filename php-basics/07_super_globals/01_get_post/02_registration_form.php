<?php
$username = '';
$email = '';
$password = '';
$password_confirmation = '';
define('REQUIRED_FIELD_ERROR', 'Field is required!');
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = post_data('username');
  $email = post_data('email');
  $password = post_data('password');
  $password_confirmation = post_data('password_confirmation');

  if (!$username) {
    $errors['username'] = REQUIRED_FIELD_ERROR;
  } else if (strlen($username) < 3) {
    $errors['username'] = 'Username must be at least 3 characters long';
  }

  if (!$email) {
    $errors['email'] = REQUIRED_FIELD_ERROR;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email must be valid!';
  }

  if (!$password) {
    $errors['password'] = REQUIRED_FIELD_ERROR;
  }

  if (!$password_confirmation) {
    $errors['password_confirmation'] = REQUIRED_FIELD_ERROR;
  }

  if ($password && $password_confirmation && strcmp($password, $password_confirmation) !== 0) {
    $errors['password'] = 'Password and password confirmation must match!';
  }

  if (empty($errors)) {
    echo "<p style='color: green'>Everything is OK</p>";
  }
}

function post_data($field)
{
  $_POST[$field] ??= '';
  return htmlspecialchars(stripslashes($_POST[$field]));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>User Registration</h1>
  <form action="" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" value="<?php echo $username; ?>"><br>
    <?php
    if (isset($errors['username'])) {
      echo "<p style='color: red'>" . $errors['username'] . "</p>";
    }
    ?>
    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>"><br>
    <?php
    if (isset($errors['email'])) {
      echo "<p style='color: red'>" . $errors['email'] . "</p>";
    }
    ?>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" value="<?php echo $password; ?>"><br>
    <?php
    if (isset($errors['password'])) {
      echo "<p style='color: red'>" . $errors['password'] . "</p>";
    }
    ?>
    <label for="password_confirmation">Repeat Password</label><br>
    <input type="password" name="password_confirmation" id="password_confirmation" value="<?php echo $password_confirmation; ?>"><br>
    <?php
    if (isset($errors['password_confirmation'])) {
      echo "<p style='color: red'>" . $errors['password_confirmation'] . "</p>";
    }
    ?>
    <button>Submit</button>
  </form>
</body>

</html>