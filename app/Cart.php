<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'ingredients', 'uniq_id', 'card_brand', 'card_last_four',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
