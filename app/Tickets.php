<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    public function getSelectedAttribute($value)
    {

        return $value ? 'selected' : 'free';
    }
}
