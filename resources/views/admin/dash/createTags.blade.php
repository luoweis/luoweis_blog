@extends('admin.templates.dash')
@section('head')
    <script src="{{ asset('/js/dash.js') }}"></script>
    @endsection
@section('content')
    <div class="container">
        @include('errors.ListFormErrors')
        <h1>添加标签</h1>
        <div class="body">
            {!! Form::open(['url' => '/admin/dash/tags','role'=>'form']) !!}
            @include('admin.dash.CreateTagFormBody')
            {!! Form::close() !!}
        </div>
    </div>
@endsection