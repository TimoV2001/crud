<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['fullName', 'phoneNumber', 'Date', 'Time', 'Table', 'Amount'];

    public $timestamps = false;

}
