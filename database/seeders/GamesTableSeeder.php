<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandomString($Length = 10)
    {
        /*$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';*/

        $characters = ['俠盜列車手',
            '俠盜列車手II',
            '俠盜列車手III',
            '俠盜列車手IV',
            '俠盜列車手V',
            '碧血狂殺',
            '碧血狂殺2',
            '湯姆克蘭西：全境封鎖',
            '湯姆克蘭西：全境封鎖2',
            '虹彩六號：圍攻行動',
            '看門狗',
            '看門狗2',
            '刺客教條',
            '刺客教條II',
            '刺客教條III',
            '刺客教條IV:黑旗',
            '刺客教條:大革命'];

        return $characters[rand(0, count($characters) - 1)];
    }

    public function generateRandomGame()
    {
        $Game = $this->generateRandomString(rand(2, 15));
        $Game = strtolower($Game);
        $Game = ucfirst($Game);
        return $Game;

    }

    public function generateRandomCompany()
    {
        $company = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];

        return $company[rand(0, count($company) - 1)];
    }


    public function genernateRandomProducer()
    {

        $producers = [
            '萊斯特·本齊',
            '史蒂夫·馬丁',
            '羅布·尼爾森',
            '弗雷德里克·朗德奎斯特',
            '詹姆斯·诺里斯',
            '安德鲁·威茨',
            '多米尼克·加伊',
            '潔德·雷蒙',
            '特里斯·德西萊茨',
            '亞歷克斯·哈欽森',
            '西爾萬·特羅捷',
            '艾力克斯·阿曼西奧',
            '小笠原賢一',
            '友池隆純',
            '森中隆',
            '鈴木亮浩',
            '迪諾·維拉諾',
            '比爾·羅普耳',
            '羅恩·米勒',
            '羅伯·帕多',
            '詹姆斯·菲尼',
            '克里斯·西戈帝',
            '邁克·多奈斯',
            '傑夫瑞·卡普蘭',
            '彼得·克日沃諾修克',
            '理查德·博爾茲莫夫斯基',
            '詹德塞·莫羅斯',
            '邁克·布斯',
            '埃里克·約翰遜',
            '傑西·克里夫',
            '竹內潤',
            '小林裕幸',
            '中西晃史',
            '田中剛',
            '伊津野英昭',
            '辻本良三',
            '北村玲',
            '藤原得郎',
            '小野義德',
            '富澤祐介',
            '飯塚啓太',
            '原田勝弘'
        ];
        return $producers[rand(0, count($producers) - 1)];


    }


    public function run()
    {
        for ($i = 0; $i < 65; $i++) {

            $g_name = $this->generateRandomGame();
            $g_company = $this->generateRandomCompany();
            $g_producer = $this->genernateRandomProducer();
            $random_datetime = Carbon::now()->subminutes(rand(1, 65));

            DB::table('games')->insert([
                'g_name' => $g_name,
                'g_company' => $g_company,
                'g_producer' => $g_producer,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }


}
