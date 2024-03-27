<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const AUTHOR = 'author';
    const EDITOR = 'editor';
    const SUBSCRIBER = 'subscriber';
    const ADMINISTRATOR = 'administrator';

    protected $fillable = [
        'name',
    ];
    
    public function roles()
    {
        return $this->belongsToMany(User::class);
    }
}
