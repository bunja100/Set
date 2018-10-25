<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'place_of_birth', 'immunisation', 'rec_of_imm', 'sex',
    ];

    public function fathers()
    {
        return $this->belongsTo('App\Father');
    }

    public function mothers()
    {
        return $this->belongsTo('App\Mother');
    }
}
