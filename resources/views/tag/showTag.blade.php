@extends('layout')

@section('content')
    <a href="/tag" class="btn btn-default">返回標籤列表</a>
    <h1>標籤:{{$tags->name}}</h1>
    @if ($tags->post()->count()>0)
    <h3>文章引用數量:{{$tags->post()->count()}}</h3>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>文章標題</th>
                        <th>標籤</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags->post as $postArticle)
                        <tr>
                            <th>{{$postArticle->id}}</th>
                            <th>{{$postArticle->title}}</th>
                            <td>
                                @foreach ($postArticle->tag as $postArticleTag)
                                <span class="label label-default">{{$postArticleTag->name}}</span>
                                @endforeach
                            </td>
                            <td><a href="{{route('post.show',$postArticle->id)}}" class="btn btn-default btn-sm">觀看文章關聯</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <p>未引用被任何文章引用</p>
    @endif
    <h3><a href="/tag/{{$tags->id}}/edit" class='btn btn-primary'>修改標籤</a></h3>
    {!!Form::open ([ 'action' => ['tagController@destroy',$tags->id] , 'method'=>'POST' , 'class' => 'pull-right' ])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('刪除標籤',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection