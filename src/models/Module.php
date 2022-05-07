<?php

namespace App\Models;

class Module
{
  private $id, $title, $description, $duration;

  public function __construct($id, $title, $description, $duration)
  {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->duration = $duration;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setId($newId)
  {
    $this->id = $newId;
  }

  public function setTitle($newTitle)
  {
    $this->title = $newTitle;
  }

  public function setDescription($newDescription)
  {
    $this->description = $newDescription;
  }

  public function setDuration($newDuration)
  {
    $this->duration = $newDuration;
  }
}
