<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'breed',
        'weight',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function treatments(){
        return $this->hasMany('App\Models\Treatment');
    }
}
