@extends('template.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>文章列表</h2>
        </div>
        @foreach($posts as $post)
        <div class="col-8">
            <h3>{{$post->title}}</h3>
            <div class="content">
                {{$post->content}}
            </div>
            <div>最後更新時間 {{$post->updated_at}}</div>
        <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection
