<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'placa', 'marca', 'color', 'person_id'
    ];

    public function person(){
        return $this->belongsTo(Person::class, 'person_id');
    }

}
