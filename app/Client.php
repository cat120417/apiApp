<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = '';

    protected $fillable = ['name', 'phone','email',
    ];
}
