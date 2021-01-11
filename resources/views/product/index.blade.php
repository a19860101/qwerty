@extends('template.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>產品列表</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">新增產品</a>
        </div>
    </div>
</div>
@endsection