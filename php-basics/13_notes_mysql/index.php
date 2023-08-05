<?php

$connection = require_once __DIR__ . '/Connection.php';
$notes = $connection->getAllNotes();

$currNote = [
  'id' => '',
  'title' => '',
  'description' => ''
];

if (isset($_GET['id'])) {
  $currNote = $connection->getNote($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Notes App</title>
</head>

<body>
  <form action="save.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $currNote['id']; ?>">
    <input type="text" name="title" placeholder="Enter title here" value="<?php echo $currNote['title']; ?>">
    <textarea name="description" cols="30" rows="10" placeholder="Enter description here"><?php echo $currNote['description']; ?></textarea>
    <button type="submit" style="cursor: pointer;">
      <?php if ($currNote['id']) : ?>
        Update note
      <?php else : ?>
        Create new note
      <?php endif; ?>
    </button>
  </form>
  <!-- cards -->
  <div class="cards">
    <?php if (empty($notes)) : ?>
      <p>No notes found</p>
    <?php else : ?>
      <?php foreach ($notes as $note) : ?>
        <div class="card">
          <a href="delete.php?id=<?php echo $note['id']; ?>" class="fa-solid fa-xmark"></a>
          <h3><a href="/?id=<?php echo $note['id']; ?>"><?php echo $note['title']; ?></a></h3>
          <p><?php echo $note['description']; ?></p>
          <small><?php echo $note['create_date']; ?></small>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</body>

</html>