<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attender extends Model
{
    use HasFactory;

    protected $table = 'Attender';

    protected $dateFormat = 'U';

    protected $fillable = [
        'firstName', 'lastName', 'email', 'organisation','jobTitle', 'companyAddress', 'phoneNumber', 'country'
    ];
}