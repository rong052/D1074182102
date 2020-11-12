<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected  $fillable=[

        'g_name',
        'g_producer',
        'g_company',
        'created_at',
        'updated_at'




    ];
}
