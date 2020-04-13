@extends('layout')

 @section('content')
    <a href="/post" class="btn btn-default">返回文章列表</a>
    <h3>創建標籤:<a href="/tag/create">按我</a></h3>
    <h1>標籤列表</h1>
    @if(count($tags)>0)
        @foreach ($tags as $tag)
            <div class="well">
                <h3>標籤名稱:<a href="/tag/{{$tag->id}}">{{$tag->name}}</a><h3>
            </div>
        @endforeach

        {{$tags->links()}}

    @else
        <p>無標籤</p>
    @endif
@endsection