<?php
define('REQUIRED_FIELD_ERROR', 'This field is required');
$errors = [];
$username = '';
$email = '';
$password = '';
$password_confirm = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = post_data('username');
  $email = post_data('email');
  $password = post_data('password');
  $password_confirm = post_data('password_confirm');

  if (!$username) {
    $errors['username'] = REQUIRED_FIELD_ERROR;
  } else if (strlen($username) < 6 || strlen($username) > 16) {
    $errors['username'] = 'Username must be more than 6 and less than 16 chars';
  }
  if (!$email) {
    $errors['email'] = REQUIRED_FIELD_ERROR;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'This field must be valid email';
  }
  if (!$password) {
    $errors['password'] = REQUIRED_FIELD_ERROR;
  }
  if (!$password_confirm) {
    $errors['password_confirm'] = REQUIRED_FIELD_ERROR;
  } else if ($password && $password_confirm && strcmp($password, $password_confirm) !== 0) {
    $errors['password_confirm'] = 'Password and password confirm must match!';
  }

  if (count($errors) === 0) {
    echo $username . '<br>';
    echo $email . '<br>';
    echo $password . '<br>';
    echo $password_confirm . '<br>';
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST">
    <label for="username">Username</label>
    <input type="text" value="<?php echo $username; ?>" name="username" id="username">
    <p style="color: red;"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>
    <label for="email">Email</label>
    <input type="text" value="<?php echo $email; ?>" name="email" id="email">
    <p style="color: red;"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
    <label for="password">Password</label>
    <input type="password" value="<?php echo $password; ?>" name="password" id="password">
    <p style="color: red;"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
    <label for="password_confirm">Password Confirm</label>
    <input type="password" value="<?php echo $password_confirm; ?>" name="password_confirm" id="password_confirm">
    <p style="color: red;"><?php echo isset($errors['password_confirm']) ? $errors['password_confirm'] : ''; ?></p>
    <button type="submit">Submit</button>
  </form>
</body>

</html>