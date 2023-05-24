<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnverifiedAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'student_id',
        'gender',
        'street',
        'village',
        'municipality',
        'province',
        'zip_code',
        'email',
        'password'

    ];
}
