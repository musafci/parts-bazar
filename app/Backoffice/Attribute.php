<?php

namespace App\Backoffice;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{

    protected $table = 'attributes';

    protected $fillable = [
        'name_en', 'attribute_type'
    ];

}
