<?php

namespace App\BusinessLayer\Concretes;

use App\BusinessLayer\Abstracts\UserInterface;
use App\User;
use Carbon\Carbon;

class UserManager implements UserInterface 
{
    private $_user;

    public function setUser(User $user)
    {
        $this->_user = $user;
    }

    public function isNew()
    {
        $now = Carbon::now();
        return $this->_user->created_at->diffInDays($now) < 7 ? 1 : 0;
    }
}