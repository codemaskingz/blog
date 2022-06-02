<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentdata extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected function setlastnameAttribute($value)
    {
        $this->attributes['lastname']= 'MR '.$value;
    }
}
