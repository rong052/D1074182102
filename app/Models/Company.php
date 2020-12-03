<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table='Companys';
    protected  $fillable=[

        'cp_name',
        'country',
        'created_at',
        'updated_at'

        ];
}
