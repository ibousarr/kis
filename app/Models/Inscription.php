<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [

    	'type',
    	'classe',
        'montant',
        'reste',
        'dossier',
        'student_id',
        'user_id',
    ];
}
