@extends('admin.templates.dash')
@section('head')
    <script src="{{ asset('/js/dash.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        @include('errors.ListFormErrors')
        <h1>修改标签</h1>
        <div class="body">
            {!! Form::model($tag,['url' => ['/admin/tags/update',$tag->id],'role'=>'form']) !!}
            @include('admin.dash.editTagFormBody')
            {!! Form::close() !!}
        </div>
    </div>
@stop