<?php
$keyword = '';
if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  echo $keyword . '<br>';
  // do whatever necessary with keyword
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
  <form action="" method="get">
    <input type="text" value="<?php echo $keyword; ?>" name="keyword" placeholder="Type and hit enter">
    <button type="submit">Search</button>
  </form>
</body>

</html>