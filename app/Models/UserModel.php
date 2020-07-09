<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserModel extends User
{
  protected $table = 'users';
  public function getDateInFormat()
  {
      return $this->created_at->format('d/m/Y');
  }
}

