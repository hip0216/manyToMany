@extends('layout')

@section('content')
    <h1>創建文章</h1>
    {!! Form::open(["action"=>"PostController@store" , 'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('title','文章標題')}}
            {{Form::text( 'title', '', ['class'=>'form-control','placeholder'=>'請輸入標題'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','文章內容')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'請輸入內容'])}}
        </div>
        {{Form::label('tags','選擇標籤')}}<br>
        @foreach($tags as $tag)
            <input type="checkbox" name="tag[]" value="{{$tag->id}}"> <label>{{$tag->name}}</label><br>
        @endforeach
        {{Form::submit("送出",['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection