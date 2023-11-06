<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarParticipant extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_registration',
        'full_name',
        'email',
        'class',
        'program_study',
        'nis',
        'id_seminar',
    ];
}
