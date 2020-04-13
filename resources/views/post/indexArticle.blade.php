@extends('layout')

 @section('content')
    <h3>創建文章:<a href="/post/create">按我</a></h3>
    <h3>管理標籤:<a href="/tag">按我</a></h3>
    <h1>文章列表</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <h3>文章標題:<a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                <h6>最後修改時間{{$post->created_at}}</h6>
                <tr>
            </div>
        @endforeach
        {!! $posts->links() !!}
    @else
        <p>無文章</p>
    @endif 
@endsection