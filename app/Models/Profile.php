<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    // protected $date = ['created_at'];
    protected $fillable = [
        'name',
        'email',
        'role',
        'address',
        'telephone',
        'password'
    ];


    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
