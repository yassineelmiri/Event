<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'titel',
        'description',
        'place_available',
        'category',
        'location',
        'date',
        'image',
        'status',
        'profile_id'
    ];
    public function getImageAttribute($value)
    {
        return $value ?? 'profile/AcrF4Qg7ux89NUng2KtdPimqrqiigAJ9DKBzcIUv.png';
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }


}
