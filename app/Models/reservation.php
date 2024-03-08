<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $date = ['created_at'];
    protected $fillable = [
        'publication_id',
        'profile_id'
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

}

