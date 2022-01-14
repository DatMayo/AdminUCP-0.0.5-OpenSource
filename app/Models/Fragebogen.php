<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fragebogen extends Model
{
    use HasFactory;
    protected $table = 'whitelist';
    protected $fillable = [
        'name',
        'old',
        'vdm',
        'rdm',
        'srp',
        'roleplay',
    ];

}
