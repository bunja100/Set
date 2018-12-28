<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'place_of_birth', 'immunisation', 'rec_of_imm', 'sex',
        'father_id', 'mother_id',
    ];

    public function father()
    {
        return $this->belongsTo(Father::class);
    }

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }
}
