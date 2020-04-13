@extends('layout')

@section('content')
    <h1>新增標籤</h1>
    {!! Form::open(["action"=>"tagController@store" , 'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','新增標籤')}}
            {{Form::text('name', '', ['class'=>'form-control','placeholder'=>'請輸入標籤'])}}
        </div>
        {{Form::submit("送出",['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection