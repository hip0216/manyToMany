@extends('layout')

@section('content')
    <h1>修改標籤</h1>
    {!! Form::open(["action"=>["tagController@update",$tags->id] , 'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','修改標籤名稱')}}
            {{Form::text('name', $tags->name , ['class'=>'form-control','placeholder'=>'請輸入標籤'])}}
        </div>
        {{Form::hidden('_method','Put')}}
        {{Form::submit("送出",['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection