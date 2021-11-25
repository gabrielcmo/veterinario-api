<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'dog_id',
        'doctor_id',
        'condition',
    ];

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }

    public function dog(){
        return $this->belongsTo('App\Models\Dog');
    }
}
