<?php
$todos = [];
if (file_exists(__DIR__ . '/todos.json')) {
  $jsonData = file_get_contents(__DIR__ . '/todos.json');
  $todos = json_decode($jsonData, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
  <style>
    body {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <form action="create.php" method="POST">
    <input type="text" name="todo" placeholder="Enter new todo here">
    <button>Create Todo</button>
  </form><br>
  <?php foreach ($todos as $todoname => $todo) : ?>
    <form action="check.php" method="POST" style="display: inline">
      <input type="hidden" name="todo" value="<?php echo $todoname; ?>">
      <input type="checkbox" <?php echo $todo['completed'] ?
                                "checked" : ""; ?>>
    </form>
    <label><?php echo $todoname; ?></label>
    <form action="delete.php" method="POST" style="display: inline">
      <input type="hidden" name="todo" value="<?php echo $todoname; ?>">
      <button>Delete</button>
    </form>
    <br>
  <?php endforeach; ?>
  <script type="application/javascript">
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function(cb) {
      cb.addEventListener('click', function() {
        cb.parentNode.submit();
      });
    });
  </script>
</body>

</html>