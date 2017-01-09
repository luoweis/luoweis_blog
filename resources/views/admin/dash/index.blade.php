@extends('admin.templates.dash')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12"  >
                <div class="panel panel-default" style="height:400px">
                    <div class="panel-heading">文章列表</div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>文章标题</th>
                                <th>文章简介</th>
                                <th>文章标签</th>
                                <th>发布时间</th>
                                <th>操作文章</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->intro }}</td>
                                    <td>{{ $article->level1 }} {{ $article->level2 }}</td>
                                    <td>{{ $article->published_at }}</td>
                                    <td>
                                        <a href="{{ url('/admin/articles/edit',$article->id) }}">修改</a>
                                        <a href="{{ url('/admin/articles/show',$article->id) }}">浏览</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">主标签</div>

                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>标签ID</th>
                                <th>标签名称</th>
                                <th>标签描述</th>
                                <th>标签变动</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Level1Tags as $level1)
                                <tr>
                                    <td>{{ $level1->id }}</td>
                                    <td>{{ $level1->name }}</td>
                                    <td>{{ $level1->intro }}</td>
                                    <td>
                                        <a href="{{ url('/admin/tags/edit',$level1->id) }}">修改</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if(count($Level1Tags)=='')
            @else
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">副标签</div>

                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>标签ID</th>
                                    <th>标签名称</th>
                                    <th>父标签名</th>
                                    <th>标签描述</th>
                                    <th>标签变动</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Level2Tags as $level2)
                                    <tr>
                                        <td>{{ $level2->id }}</td>
                                        <td>{{ $level2->name }}</td>
                                        <td>{{ $level2->upLevel }}</td>
                                        <td>{{ $level2->intro }}</td>
                                        <td>
                                            <a href="{{ url('/admin/tags/edit',$level2->id) }}">修改</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection