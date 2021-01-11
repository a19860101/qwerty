@extends('template.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h2>新增產品</h2>
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">產品名稱</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增產品">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
@endsection