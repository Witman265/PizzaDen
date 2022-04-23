<?php

namespace App\Http\Controllers;

use App\Models\Pizza as ModelsPizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = ModelsPizza::all();
        return view('pizzas.index',['pizzas'=>$pizzas]);
    }

    public function show($id){
        $pizza = ModelsPizza::findorfail($id);
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function destroy($id){
        $pizza = ModelsPizza::findorfail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new ModelsPizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base= request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect ('/')->with('mssg','Thanks for your order');
    }

}
