<?php

namespace App\Models\StockShares;

use Illuminate\Database\Eloquent\Model;

class StockShare extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'share_instrument_name',
        'quantity',
        'price',
        'total_investment',
        'certificate_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];


    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
