<?php

class Student extends Person
{
  private int $std_id;

  public function __construct($name, $age, $std_id)
  {
    parent::__construct($name, $age, null);
    $this->std_id = $std_id;
  }

  public function getStdId()
  {
    return $this->std_id;
  }
}
