<?php

use Illuminate\Database\Seeder;

class linkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		"name"		=> "百度",
        		"url"		=> 'https://www.baidu.com',
        	],

        	[
        		"name"		=> "新浪",
        		"url"		=> 'https://www.sina.com',
        	],

        	[
        		"name"		=> "哔哩哔哩",
        		"url"		=> 'https://www.bilibili.com',
        	],
        ];
        DB::table('link')->insert($data);
    }
}
