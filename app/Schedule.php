<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = [
      'start_time', 'end_time', 'date_start', 'date_end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
