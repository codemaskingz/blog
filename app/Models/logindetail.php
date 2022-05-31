<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class logindetail extends Model
{
    use HasFactory;

    public function getLastnameAttribute($value)
    {
        return ucFirst($value);

    }

    public function getFirstnameAttribute($value)
    {
        return $value. ', OMO ILE IWE OOO';
    }

    
    protected function lastname(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }
}
