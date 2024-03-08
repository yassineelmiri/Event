<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory, SoftDeletes;
    protected $date = ['created_at'];
    protected $fillable = [
        'titer',
        'type',
        'email',
        'description',
        'profile_id'
    ];
}
