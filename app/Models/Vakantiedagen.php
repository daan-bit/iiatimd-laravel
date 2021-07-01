<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vakantiedagen extends Model
{
    use HasFactory;
    protected $table = 'vakantiedagen';    

    protected $fillable = [
        'id',
        'user_id',
        'vakantie_van',
        'vakantie_tot',
        'inLaravelDB'
    ];

    public $timestamps = false;
}
