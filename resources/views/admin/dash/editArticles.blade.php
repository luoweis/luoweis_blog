@extends('admin.templates.dash')
@section('head')
    <script src="{{ asset('/js/dash.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        @include('errors.ListFormErrors')
        <h1>修改文章</h1>
        <div class="body">
            {!! Form::model($article,['url' => ['/admin/articles/update',$article->id],'role'=>'form']) !!}
            @include('admin.dash.CreateArticlesFormBody')
            {!! Form::close() !!}
        </div>
    </div>
@stop