<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function blog(){
        return $this->hasMany('App\Modules\Articals\Models\Blog');
    }

    public function comment(){
        return $this->hasMany('App\Modules\Articals\Models\Comment');
    }

    public function vote(){
        return $this->hasMany('App\Modules\Articals\Models\Vote');
    }
}
