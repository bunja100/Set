<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable =
        ['mothers_name', 'Occupation_of_mother', 'address_of_mother'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
