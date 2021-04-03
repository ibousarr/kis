<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Student;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [

    	'anneescolaire',
        'type',
    	'classe_id',
        'student_id',
        'user_id',
        'bfem',
        'montant',
        'reste',
        'dossier',
        'dossier',
        'observations',
        'contact',        
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
