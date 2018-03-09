<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];
    protected $dates = ['created_at', 'updated_at'];
    public $timestamps = false;
    protected $hidden = [ 'password', 'remember_token'];
    protected $table = 'users';

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
