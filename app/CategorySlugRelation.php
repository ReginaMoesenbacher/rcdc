<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorySlugRelation extends Model
{
    protected $table = 'category_slug';
    public $timestamps = false;

    protected $fillable = [
        'category_string',
        'slug'
    ];
}
