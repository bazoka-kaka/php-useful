<?php

class Connection
{
  static private $user = "root";
  static private $pass = "";
  static private $dsn = "mysql:server=localhost:8080;dbname=test";
  private $pdo;

  public function __construct()
  {
    $this->pdo = new PDO(self::$dsn, self::$user, self::$pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getAllNotes()
  {
    $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY create_date DESC");
    $statement->execute();
    return $statement->fetchAll();
  }

  public function getNote($id)
  {
    $statement = $this->pdo->prepare("SELECT * FROM notes WHERE id=:id");
    $statement->bindValue('id', $id);
    $statement->execute();
    return $statement->fetch();
  }

  public function createNote($title, $description)
  {
    $statement = $this->pdo->prepare("INSERT INTO notes (title, description, create_date) VALUES (:title, :description, :date)");
    $statement->bindValue('title', $title);
    $statement->bindValue('description', $description);
    $statement->bindValue('date', date('Y-m-d H:i:s'));
    return $statement->execute();
  }

  public function updateNote($id, $title, $description)
  {
    $statement = $this->pdo->prepare("UPDATE notes SET title=:title, description=:description WHERE id=:id");
    $statement->bindValue('id', $id);
    $statement->bindValue('title', $title);
    $statement->bindValue('description', $description);
    return $statement->execute();
  }

  public function deleteNote($id)
  {
    $statement = $this->pdo->prepare('DELETE FROM notes WHERE id=:id');
    $statement->bindValue('id', $id);
    return $statement->execute();
  }
}

return new Connection();
