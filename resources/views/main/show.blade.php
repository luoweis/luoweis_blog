@extends('main.templates.read')
@section('content')
    <div class="read_nav">
        <div class="read_back">
            <a href="{{url('/')}}">
                <i class="fa fa-home fa-2x"></i>
            </a>
        </div>

        <div class="read_title">
            {{ $article->title }}
        </div>
    </div>
        <div class="read_content">
            {!! $article->content !!}
        </div>
@endsection