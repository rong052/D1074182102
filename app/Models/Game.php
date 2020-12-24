<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected  $fillable=[

        'g_name',
        'g_company',
        'g_producer',
        'created_at',
        'updated_at'

    ];
    public function scopeAllGamesByCompany($query, $company_name)
    {
        $query->join('companys','games.g_company', '=', 'companys.id')  //指定要和games合併的欄位 (table)為:companys 並games使用設定的外部建g_companys
        ->where('g_company', '=', $company_name)
        ->orderBy('games.id') //companys的id 和games的id 同步
        ->select(                                                         //指定欄位
            'games.id',
            'games.g_name as g_name',
            'companys.cp_name as g_company',
            'games.g_producer',
            'games.created_at',
            'games.updated_at');
    }

    public function scopeAllGames($query)
    {
        $query->join('companys','games.g_company', '=', 'companys.id')  //指定要和games合併的欄位 (table)為:companys 並games使用設定的外部建g_companys
            ->orderBy('games.id') //companys的id 和games的id 同步
            ->select(                                                         //指定欄位
                'games.id',
                'games.g_name as g_name',
                'companys.cp_name as g_company',
                'games.g_producer',
                'games.created_at',
                'games.updated_at');
    }
    public  function companys()
    {
        return  $this->belongsTo('App\Models\Companys','g_company','id');
    }
}
