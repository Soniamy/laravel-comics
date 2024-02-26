@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center">
    Comics
</h1>

<div class="row">
 @foreach($comics as $comic)
 <div class="col-12 col-sm-3">
    <div class="card">
  <img src=" {{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
  <div class="card-body">
    <h5 class="card-title">{{$comic['title']}}</h5>
    <p class="card-text">{{$comic['description']}}</p>
    <ul>
     <li>
        {{$comic['price']}}
    </li>
     <li>
        {{$comic['series']}}
    </li>
     <li>
        {{$comic['sale_date']}}
    </li>
      <li>
        {{$comic['type']}}
    </li>
 </ul>
    <a href="#" class="btn btn-primary">Go to comic</a>
  </div>
</div>
 
 </div>
 @endforeach
</div>
@endsection
