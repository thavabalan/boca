<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Player extends Model
{
    protected $dates = [
        'dob',
    ];
}
