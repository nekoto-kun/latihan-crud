<?php

namespace App\Models;

class Course
{
  private $id, $title, $category, $description, $modules;

  public function __construct($id, $title, $category, $description, $modules)
  {
    $this->id = $id;
    $this->title = $title;
    $this->category = $category;
    $this->description = $description;
    $this->modules = $modules;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getModules()
  {
    return $this->modules;
  }

  public function setId($newId)
  {
    $this->id = $newId;
  }

  public function setTitle($newTitle)
  {
    $this->title = $newTitle;
  }

  public function setCategory($newCategory)
  {
    $this->category = $newCategory;
  }

  public function setDescription($newDescription)
  {
    $this->description = $newDescription;
  }

  public function setModules($newModules)
  {
    $this->Modules = $newModules;
  }
}
