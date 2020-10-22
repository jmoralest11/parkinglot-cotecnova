<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputOutput extends Model
{
    use HasFactory;

    protected $table = 'inputs_outputs';

    protected $fillable = [
        'vehicle_id', 'person_id', 'estado'
    ];

}
