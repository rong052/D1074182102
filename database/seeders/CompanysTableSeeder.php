<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($Length = 10)
    {
        $characters = [
            'Rockstar Games',
            'Ubisoft (育碧)',
            '光榮特庫摩控股株式會社',
            'Activision Publishing(動視)',
            'Blizzard Entertainment(暴雪娛樂)',
            ' CD Projekt',
            'Valve Corporation (維爾福公司)',
            'CAPCOM(卡普空)',
            '萬代南夢宮娛樂'
        ];

        return $characters[rand(0, count($characters) - 1)];

    }

    public function generateRandomcpname()
    {
        $Game = $this->generateRandomString(rand(2, 15));
        $Game = strtolower($Game);
        $Game = ucfirst($Game);
        return $Game;

    }

    public function generateRandomcountry()
    {
        $company = ['美國', '日本', '法國', '波蘭'];

        return $company[rand(0, count($company) - 1)];
    }



    public function run()
    {
        for ($i=0; $i<10; $i++)
        {
            $cp_name = $this->generateRandomcpname();
            $country = $this->generateRandomcountry();

            $random_datetime = Carbon::now()->subminutes(rand(1, 65));

            DB::table('companys')->insert([

                'cp_name' => $cp_name,
                'country' => $country,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
