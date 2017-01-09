<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /**
     * 与tags表的一个映射关系，在对表进行操作的时候直接调用Tags模块就可以
     */
    //设置articles表允许直接通过laravel向其添加内容
    protected $fillable=['upLevel','name','intro','IDLevel','published_at'];
    //定义published_at字段为Carbon格式，方便对其进行格式转换，如 diffForHumans()
    protected $dates=['published_at'];

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
