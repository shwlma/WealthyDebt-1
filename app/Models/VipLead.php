<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipLead extends Model
{
    use HasFactory;

    protected $table = 'vip_leads';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'notes',
    ];
}