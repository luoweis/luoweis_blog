<div class="form-group">
    {!! Form::label('IDLevel','标签级别') !!}
    {!! Form::select('IDLevel', ['level1' => '一级标签', 'level2' => '二级标签'], null, ['placeholder' => '选择标签级别','class'=>'form-control','onchange'=>'tagsAddSelect()']) !!}
</div>
<div class="form-group" id="forLevel2" style="display: none">
    {!! Form::label('upLevel','一级标签名称') !!}
    <select class="form-control" name="upLevel">
        @foreach($Level1Tags as $level1)
            <option value="{{ $level1->name }}">{{ $level1->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('name','标签名称') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('intro','标签描述') !!}
    {!! Form::textarea('intro',null,['class'=>'form-control','rows'=>3]) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','发布时间') !!}
    {!! Form::date('published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
{!! Form::submit('提交',['class'=>'btn btn-primary form-control']) !!}