<?php
session_start();

// if (isset($_SESSION['counter'])) {
//   $_SESSION['counter']++;
// } else {
//   $_SESSION['counter'] = 1;
// }

$_SESSION['counter'] ??= 0;
$_SESSION['counter']++;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions and Cookies</title>
</head>

<body>
  <h1>You have visited the page <?php echo $_SESSION['counter']; ?> times</h1>
</body>

</html>