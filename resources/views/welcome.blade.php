@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 logo">
        <p>
        <img src="/img/15402.jpg" alt="Pizza house logo" width="400px" height="160px" style="padding-left: 40px;"/><br>
        <h1 class="lebo">The Lilongwe's Best Pizza House</h1>

        <br>
        <p class="mssg">{{ session('mssg')}}</p>
        <a href="/pizzas/create" >Order a Pizza</a>
        </p>
    </div>
</div>
@endsection
