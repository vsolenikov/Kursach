<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        'name_event', 'date_event', 'description','address','price','tickets'
    ];
}
