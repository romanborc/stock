<?php

namespace App\Http\Classes\LogicalModels\CheckRole;

class UserChecker 
{
  private $model;

  public function __construct($model)
  {
      $this->model = $model;
  }

  /**
   * Checks if the user has a role by its name.
   * @param  array  $name
   */
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
