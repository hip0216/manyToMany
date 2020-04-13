@extends('layout')

@section('content')
    <a href="/post" class="btn btn-default">返回文章列表</a>
    <h1>文章標題:{{$post->title}}</h1>
    <div>
        文章內容:{!! $post->body !!}
    </div>
    <div class="tag">
        @if(count($post->tag)>0)
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>標籤</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post->tag as $tag)
                        <tr>
                            <th>{{$tag->id}}</th>
                            <th>{{$tag->name}}</th>
                            <th><td><a href="{{route('tag.show',$tag->id)}}" class="label label-default">觀看標籤關聯</a></td></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>       
        @else
            <p>未添加任何標籤</p>
        @endcan
    </div>
    <hr>
    <small>最後修改時間:{{$post->created_at}}</small>
    <hr>
    <a href="/post/{{$post->id}}/edit" class='btn btn-primary'">修改文章</a>
    {!!Form::open ([ 'action' => ['PostController@destroy',$post->id] , 'method'=>'POST' , 'class' => 'pull-right' ])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('刪除文章',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection