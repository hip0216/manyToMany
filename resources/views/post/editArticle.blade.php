@extends('layout')

@section('content')
    <h1>修改文章</h1>
    {!! Form::open(["action"=>["PostController@update",$post->id],'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('title','修改標題')}}
            {{Form::text( 'title',$post->title, ['class'=>'form-control','placeholder'=>'請輸入標題'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','修改內容')}}
            {{Form::textarea('body',$post->body, ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'請輸入內容'])}}
        </div>
        {{Form::label('tags','選擇標籤')}}<br>
        @foreach($tags as $id=>$tag)
            @if (isset($tagChecked[$id]))
                <input type="checkbox" name="tag[]" value="{{$id}}" checked> <label> {{$tag}}</label><br>
            @else
                <input type="checkbox" name="tag[]" value="{{$id}}"> <label>{{$tag}}</label><br>
            @endif
        @endforeach
        {{Form::hidden('_method','Put')}}
        {{Form::submit("送出",['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection