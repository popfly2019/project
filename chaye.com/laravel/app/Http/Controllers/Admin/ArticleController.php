<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Admin\Article;
use DB;
class ArticleController extends CommonController
{
    public function index()
    {
        $list = Article::orderBy('id','desc')->paginate(5);
        $assign = compact("list");
    	return view('Admin.Article.index',$assign);
    }

    public function add()
    {
        $category = DB::table('nav')->get();
        $assign = compact("category");
    	return view('Admin.Article.add',$assign);
    }

    public function store(Request $request)
    {
    	if($request->hasFile('avatar') && $request->file('avatar')->isValid())
    	{
            $path = md5(time().rand(1000,9999)).".".$request->file('avatar')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('avatar')->move($filename,$path);
            $data = $request->all();
            $data['avatar'] = $filename."/".$path;
            $result = Article::create($data);

            if($result)
            {
                return view('Admin.success')->with([
                        "message"       => "添加成功",
                        "url"           => url('admin/article'),
                        "jumpTime"      => 3,
                        "name"          => "新闻",
                    ]);
            }else{
                return redirect()->back();
            }
    	}
    }

    public function edit($id)
    {
        $manage = Article::find($id);
        $category = DB::table('nav')->where('parent',"4")->get();
        $assign = compact("manage","category");
        return view('Admin.Article.edit',$assign);
    }

    public function update(Request $request,$id)
    {
        $msg = Article::find($id);
        if($request['avatar'] == null)
        {
            $request['avatar'] = $msg['avatar'];
            $data = $request->except("_token","submit");
        }else{
            $path = md5(time().rand(1000,9999)).".".$request->file('avatar')->getClientOriginalExtension();
            $filename = "./Uploads";
            $request->file('avatar')->move($filename,$path);
            $data = $request->except("_token","submit");
            $data['avatar'] = $filename."/".$path;
        }
        $result = Article::where('id',$id)->update($data);
        if(false !== $result)
        {
            return view('Admin.success')->with([
                    "message"       => "编辑成功",
                    "url"           => url('admin/article'),
                    "jumpTime"      => 3,
                    "name"          => "新闻",
                ]);
        }else{
            return redirect()->back();
        }
    }

    public function forceDelete($id)
    {
        $data = Article::find($id);
        $result = $data->delete();
        if($result)
        {
            return view('Admin.success')->with([
                    "message"       => "删除成功",
                    "url"           => url('admin/article'),
                    "jumpTime"      => 3,
                    "name"          => "新闻",
                ]);
        }else{
            return redirect()->back();
        }
    }
}
