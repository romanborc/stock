<?php

namespace App\Http\Classes\Logical\CheckRole;

trait UserTraits
{

  /**
   * One-to-Many relations with Role.
   *
   */
  public function roles()
  {
      $roles = $this->belongsTo('App\Models\Role');
      return $roles;
  }
  
  /**
   * @return App\Http\Classes\Logical\CheckRole\UserChecker
   */
  private function userChecker()
  {
      return new UserChecker($this);
  }

  /**
   * Checks if the user has a role by its name.
   * @param  array  $name
   */
  public function hasRole($name)
  { 
    return $this->userChecker()->currentUserHasRole($name);
  }

}
