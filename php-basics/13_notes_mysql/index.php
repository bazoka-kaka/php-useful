<?php
$connection = require_once __DIR__ . '/Connection.php';

$notes = $connection->getNotes();

$currNote = [
  'ID' => '',
  'title' => '',
  'description' => '',
];
if (isset($_GET['id'])) {
  $currNote = $connection->getNoteById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Notes with MySQL</title>
</head>

<body>
  <form action="save.php" method="POST" class="note-form">
    <input type="hidden" name="id" value="<?php echo $currNote['ID']; ?>">
    <input type="text" name="title" placeholder="Note Title" value="<?php echo $currNote['title']; ?>">
    <textarea name="description" cols="30" rows="10" placeholder="Note Description"><?php echo $currNote['description']; ?></textarea>
    <button class="btn">
      <?php if ($currNote['ID']) : ?>
        Update Note
      <?php else : ?>
        Add Note
      <?php endif; ?>
    </button>
  </form>
  <!-- notes -->
  <div class="notes-container">
    <?php foreach ($notes as $note) : ?>
      <div class="note">
        <a href="/?id=<?php echo $note['ID']; ?>"><?php echo $note['title'] ?></a>
        <p><?php echo $note['description']; ?></p>
        <small><?php echo $note['create_date']; ?></small>
        <form action="delete.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $note['ID']; ?>">
          <button class="fa-solid fa-xmark"></button>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>