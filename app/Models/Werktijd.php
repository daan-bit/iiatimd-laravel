<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werktijd extends Model
{
    protected $table = 'werktijden';
    protected $fillable = [
        'id',
        'user_id',
        'begin_shift',
        'einde_shift',
        'inLaravelDB'
    ];

    public $timestamps = false;
    public $incrementing = false;

    use HasFactory;
}
