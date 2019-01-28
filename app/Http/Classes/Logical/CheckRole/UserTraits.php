<?php

namespace App\Http\Classes\Logical\CheckRole;

trait UserTraits
{
  public function roles()
  {
      $roles = $this->belongsTo('App\Models\Role');
      return $roles;
  }
  
  private function userChecker()
  {
      return new UserChecker($this);
  }

  public function hasRole($name)
  { 
    return $this->userChecker()->currentUserHasRole($name);
  }

}
