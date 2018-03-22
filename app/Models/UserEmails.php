<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserEmails extends Authenticatable
{


    protected $table = "users_email_addresses";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_address', 'is_default'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'is_default',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    /**
      * Override auth identifier name
      *
      * @return string
    **/
    public function getAuthIdentifierName()
    {
      
        return 'user_id';
      
    }
}
