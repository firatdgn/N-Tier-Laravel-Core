<?php

namespace App\Http\Controllers;

use App\BusinessLayer\Abstracts\UserInterface;
use App\BusinessLayer\Concretes\UserManager;
use App\Models\UserModel;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private UserInterface $_user;
    public function __construct(UserManager $user) {
        $this->_user = $user;
        $this->_user->setUser(User::find(1));
    }
    public function checkUser()
    {
        $data['isNew'] = $this->_user->isNew();
        $data['date'] = UserModel::find(1)->getDateInFormat();
        return $data;
    }
}
