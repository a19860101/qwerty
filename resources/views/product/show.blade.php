@extends('template.master')
@section('content')

    @foreach($products as $prod)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>#{{$prod->id}} -- {{$prod->title}}</h1>
            </div>
        </div>
    </div>
    @endforeach
@endsection