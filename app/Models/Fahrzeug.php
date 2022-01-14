<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fahrzeug extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $connection = 'mysql2';
    protected $fillable = [
        'model',
        'charID',
        'numberPlate',
        'parked',
        'fill',
        'km',

    ];
}
