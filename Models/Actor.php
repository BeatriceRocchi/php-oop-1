<?php

class Actor
{
  public $name;
  public $surname;
  public $role;

  public function __construct(string $_name, string $_surname, string $_role)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->role = $_role;
  }

  public function getActorInfo()
  {
    echo "$this->surname $this->name as $this->role";
  }
}
