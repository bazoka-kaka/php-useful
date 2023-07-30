<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo '<pre>';
  var_dump($_POST['FILE']);
  echo '</pre>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button>Upload</button>
  </form>
</body>

</html>