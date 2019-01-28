<?php

namespace App\Http\Middleware\CheckRole;

use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware 
{
  const DELIMITER = '|';


  protected function authorization($type, $roles, $guard = null) 
  {
    $method = $type == 'role' ? 'hasRole' : null;
    if(!is_array($roles)) {
      $roles = explode(self::DELIMITER, $roles);
    }

    return Auth::guard($guard)->user()->$method($roles);
  }
}