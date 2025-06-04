<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'director_id',
        'legal_form',
        'name',
        'tin',
        'legal_address',
        'raiting',
        'phone_number',
        'email',
    ];
}
