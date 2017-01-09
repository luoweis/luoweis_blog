<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * 与articles表的一个映射关系，在对表进行操作的时候直接调用Aritcles模块就可以
     */
    //设置articles表允许直接通过laravel向其添加内容
    protected $fillable=['title','intro','content','level1','level2','published_at'];
    //定义published_at字段为Carbon格式，方便对其进行格式转换，如 diffForHumans()
    protected $dates=['published_at'];

    /**
     * @param $query
     * 封装一个查询语句的函数方法
     * 方法用途：
     * published_at 字段中查询小于等于当前时间的内容
     */
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }


    /**
     * @param $date
     * 对将要写入数据库的字段进行预格式化
     * 命名方法：
     * set + PublishedAt + Attribute
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
}
