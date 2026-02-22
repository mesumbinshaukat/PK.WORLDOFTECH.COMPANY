<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username', 'password', 'two_fa_secret', 'last_login',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password', 'two_fa_secret',
    ];
}
