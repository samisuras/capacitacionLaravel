<?php

namespace App\Presenter;

use App\User;

class UsersPresenter extends Presenter {

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function userName(){
        return $this->$user->name;
    }

    public function userEmail(){
        return $this->user->email;
    }

    public function link(){
        return $this->user->link;
    }
}
