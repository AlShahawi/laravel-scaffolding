<?php

namespace App\Models;

use App\Models\Scopes\UserScopes;
use App\Models\Helpers\UserHelpers;
use App\Models\Mutators\UserMutators;
use App\Models\Relations\UserRelations;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, UserRelations, UserScopes, UserMutators, UserHelpers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
