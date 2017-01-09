<div class="form-group" id="divTitle">
    {!! Form::label('title','文章标题') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group" id="divIntro">
    {!! Form::label('intro','内容简介') !!}
    {!! Form::textarea('intro',null,['class'=>'form-control','rows'=>3]) !!}
</div>
<div class="form-group" id="level1">
    {!! Form::label('level1','一级标签') !!}
    <select class="form-control" name="level1">
        @foreach($Level1Tags as $level1)
            <option value="{{ $level1->name }}">{{ $level1->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group" id="level2">
    {!! Form::label('level2','二级标签') !!}
    <select class="form-control" name="level2">
        @foreach($Level2Tags as $level2)
            <option value="{{ $level2->name }}">{{ $level2->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group" >
    {!! Form::label('content','内容主体') !!}
    <div id="divhidd">
        <a href="#" onclick="hidd();return false;">
            <span class="glyphicon glyphicon-resize-small"></span>
        </a>
    </div>
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','发布时间') !!}
    {!! Form::date('published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
{!! Form::submit('提交',['class'=>'btn btn-primary form-control']) !!}