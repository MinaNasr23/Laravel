<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Table1 extends Model
{
    protected $fillable = [
        "id","SKU","Name","Price","Type_switcher","Size","Height","Width","Length","Weight"
    ];
}
