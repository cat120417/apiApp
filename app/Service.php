<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'desc'
    ];
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
