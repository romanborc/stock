<?php

namespace App\Http\Middleware\CheckRole;

use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware 
{
  const DELIMITER = '|';

  /**
   * Check if the request has authorization to continue.
   *
   * @param  string $type
   * @param  string $roles
   */
  protected function authorization($type, $roles, $guard = null) 
  {
    $method = $type == 'role' ? 'hasRole' : null;
    if(!is_array($roles)) {
      $roles = explode(self::DELIMITER, $roles);
    }

    return Auth::guard($guard)->user()->$method($roles);
  }
}