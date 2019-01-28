<?php

namespace App\Http\Classes\Logical\CheckRole;

class UserChecker 
{
  private $model;

  public function __construct($model)
  {
      $this->model = $model;
  }

  public function currentUserHasRole($name)
  {
    if(!$this->model->roles()->first()) {
      return false;
    }

    $rolesNames = is_array($name) ? $name : [$name];
    $roles = $this->model->roles()->first()->toArray();
    
    foreach($rolesNames as $roleName) {
      if($roles['name'] == $roleName) {
        return true;
      }
    }

  }
}
