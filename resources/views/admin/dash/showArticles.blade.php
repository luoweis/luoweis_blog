@extends('admin.templates.dash')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <a href="{{url('/admin/dash')}}"><span class="glyphicon glyphicon-hand-left"></span></a>
            <h3>{{$article->title}}</h3>
            <div class="pre-scrollable">
                {!! $article->content !!}
            </div>

        </div>
    </div>
@endsection
