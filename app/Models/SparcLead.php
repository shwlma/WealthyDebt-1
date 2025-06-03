<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparcLead extends Model
{
    use HasFactory;

    protected $table = 'sparc_leads'; 

    protected $fillable = [
        'name',
        'email',
        'question', 
        'notes',
    ];
}