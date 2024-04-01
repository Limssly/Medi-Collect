<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{

    protected $fillable = [
        'matricule',
        'mail',
        'specialite',
        'adresse',
        'compte'
    ];
    
    use HasFactory;
}
