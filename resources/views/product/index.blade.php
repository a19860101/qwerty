@extends('template.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>產品列表</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">新增產品</a>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>產品名稱</th>
                    <th></th>
                </tr>
                @foreach($products as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->title}}</td>
                    <td>
                        <a href="{{route('products.show',['product'=>$prod->id])}}">更多資訊</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection