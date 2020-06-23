<?php

use Illuminate\Database\Seeder;

class msgTableSeeder extends Seeder
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
        		"title"		=> "留言标题1",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        	[
        		"title"		=> "留言标题2",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        	[
        		"title"		=> "留言标题3",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        	[
        		"title"		=> "留言标题4",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        	[
        		"title"		=> "留言标题5",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        	[
        		"title"		=> "留言标题6",
        		"name"		=> "留言姓名",
        		"phone"		=> "13751781210",
        		"email"		=> "969152928@qq.com",
        		"address"	=> "留言地址",
        		"content"	=> "留言内容",
        	],
        ];

        DB::table('msg')->insert($data);
    }
}
