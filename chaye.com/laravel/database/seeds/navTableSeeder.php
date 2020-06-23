<?php

use Illuminate\Database\Seeder;

class navTableSeeder extends Seeder
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
        		"name"		=> "网站首页",
        		"url"		=> "/",
        		"model"		=> "Index",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "公司简介",
        		"url"		=> "jianjie",
        		"model"		=> "Jianjie",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "产品中心",
        		"url"		=> "product",
        		"model"		=> "Product",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "新闻中心",
        		"url"		=> "news",
        		"model"		=> "News",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "下载中心",
        		"url"		=> "download",
        		"model"		=> "Download",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "公司相册",
        		"url"		=> "photo",
        		"model"		=> "Photo",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "在线留言",
        		"url"		=> "msg",
        		"model"		=> "Msg",
        		"parent"	=> "0",
        	],
        	[
        		"name"		=> "联系我们",
        		"url"		=> "contact",
        		"model"		=> "Contact",
        		"parent"	=> "0",
        	],
        	

        ];
        DB::table("nav")->insert($data);
    }
}
