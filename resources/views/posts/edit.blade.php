@extends('template.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h2>編輯文章</h2>
            <form action="{{route('posts.update',['post'=>$post->id])}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="content">內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="儲存文章">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
@endsection