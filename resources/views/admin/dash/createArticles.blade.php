@extends('admin.templates.dash')
@section('head')
    <script src="{{ asset('/js/dash.js') }}"></script>
@endsection
@section('content')
@section('content')
    <div class="container">
        @include('errors.ListFormErrors')
        <h1>开始撰写文章</h1>
        <div class="body">
            {!! Form::open(['url' => '/admin/dash/articles','role'=>'form']) !!}
            @include('admin.dash.CreateArticlesFormBody')
            {!! Form::close() !!}
        </div>
    </div>
@endsection