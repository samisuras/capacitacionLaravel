<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function __construct()
    {

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    private $email;
    private $name;

    public function roles(){
        return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    public function isAdmin(){
        $this->hasRoles(['admin']);
    }

    public function hasRoles(array $roles){
//        foreach ($roles as $role){
//            foreach ($this->roles as $userRole)
//                if($userRole->name === $role)
//                    return true;
//        }
//        return false;
//        //O podria ser asi
        return (boolean)$this->roles->pluck('name')->intersect($roles)->count();
    }

    public function present(){
        return new User($this);
    }
}
