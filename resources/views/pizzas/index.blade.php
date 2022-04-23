@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="hdText">Pizza List</h1>
        <p></p>
        
    <div class="container">
        @foreach($pizzas as $pizza)
        <li class="col-md-6 list-group-item">{{$pizza->name}} - {{$pizza->type}}  - {{$pizza->base}}</li>
        @endforeach
    </div>
</div>
@endsection
