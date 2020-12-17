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

    public function scopeAllCompanys($query)
    {
        $query->orderBy('id') //companys的id 和games的id 同步
        ->select(                                                         //指定欄位
        'id',
        'cp_name');
    }
}
