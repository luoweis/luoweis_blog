<?php

namespace App\Http\Controllers\Admin;

use App\Articles;
use App\Http\Requests\CreateArticlesRequest;
use App\Tags;
use Illuminate\Http\Request;

use App\Http\Requests\CreateTagsRequest;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('后台首页，当前用户名：'.auth('admin')->user()->name);
        $Level1Tags=Tags::get()->where('IDLevel','level1');
        $Level2Tags=Tags::get()->where('IDLevel','level2');
        $articles = Articles::latest()->published()->get();

        return view('admin.dash.index',compact('Level1Tags','Level2Tags','articles'));
    }


    public function createArticles()
    {
        $Level1Tags=Tags::get()->where('IDLevel','level1');
        $Level2Tags=Tags::get()->where('IDLevel','level2');
        return view('admin.dash.createArticles',compact('Level1Tags','Level2Tags'));
    }

    public function createTags()
    {
        $Level1Tags=Tags::get()->where('IDLevel','level1');
        return view('admin.dash.createTags',compact('Level1Tags'));
    }
    public function storeTags(CreateTagsRequest $request)
    {
        Tags::create($request->all());
        return redirect('/admin/dash');
    }
    public function storeArticles(CreateArticlesRequest $request){
        Articles::create($request->all());
        return redirect('/admin/dash');
    }
    public function  editArticles($id){
        $Level1Tags=Tags::get()->where('IDLevel','level1');
        $Level2Tags=Tags::get()->where('IDLevel','level2');
        $article=Articles::findOrFail($id);
        return view('admin.dash.editArticles',compact('article','Level2Tags','Level1Tags'));
    }
    public function showArticles($id) {
        $article=Articles::findOrFail($id);
        return view('admin.dash.showArticles',compact('article'));
    }

    public function updateArticles(CreateArticlesRequest $request,$id){
        /**
         *前端edit函数修改的内容需要使用post提交到这里
         * 然后更新数据库
         */
        $article = Articles::findOrFail($id);
        $article ->update($request->all());
        //跳转到文章列表页
        return redirect('/admin/dash');
    }
    public function editTags($id){
        $tag = Tags::findOrFail($id);
        $Level1Tags=Tags::get()->where('IDLevel','level1');
        return view('admin.dash.editTags',compact('tag','Level1Tags'));
    }
    public function updateTags(CreateTagsRequest $request,$id){
        /**
         *前端edit函数修改的内容需要使用post提交到这里
         * 然后更新数据库
         */
        $tag = Tags::findOrFail($id);
        $tag ->update($request->all());
        //跳转到文章列表页
        return redirect('/admin/dash');
    }
}
