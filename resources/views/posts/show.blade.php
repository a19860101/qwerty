@extends('template.master')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-8">
            <h3>{{$post->title}}</h3>
            <div class="content">
                {{$post->content}}
            </div>
            <div>最後更新時間 {{$post->updated_at}}</div>
            <hr>
            <a href="#" class="btn btn-outline-info" onclick="history.back()">回上頁</a>
            <form action="/posts" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-outline-danger" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
            <a href="{{route('posts.edit',['id'=>$post->id])}}" class="btn btn-outline-success">編輯</a>
        </div>
        @endforeach
    </div>
</div>
@endsection