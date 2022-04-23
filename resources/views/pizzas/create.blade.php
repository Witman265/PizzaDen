@extends('layouts.app')

@section('content')
<div class="container create-pizza">
    <h1>Create New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text " id="name" name="name">
        <br>
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <br>
        <label for="base">Choose pizza base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <br>
        <fieldset class="container">
            <label>Extra Toppings</label><br>
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection