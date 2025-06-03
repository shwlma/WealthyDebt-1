<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupVipLead extends Model
{
    use HasFactory;

    protected $table = 'group_vip_leads'; 

    protected $fillable = [
        'name',
        'email',
        'notes',
    ];
}
