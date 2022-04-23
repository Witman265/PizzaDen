@extends('layouts.app')

@section('content')
<div class=" container">
    <h1 class="showTitle">Order for {{$pizza->name}} </h1>
        <p class="type">Type - {{$pizza->type}}</p>
        <p class="base">Base - {{$pizza->base}}</p>

        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach($pizza ->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>

        <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class=" btn-outline-danger.active">Complete Order</button>
        </form>
        <a href="/pizzas" class="back"><- Back to all Pizzas</a>
</div>
@endsection