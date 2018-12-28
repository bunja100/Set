<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    protected $fillable =
        ['fathers_name', 'Occupation_of_father', 'address_of_father'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
