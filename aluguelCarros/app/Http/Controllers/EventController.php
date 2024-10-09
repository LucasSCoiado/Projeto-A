<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class EventController extends Controller
{
    
    public function index(){
    
        $search = request('search');

        if($search){
            $cars = Car::where([
                ['name','like','%'.$search.'%']
            ])->get();
        }else{
            $cars = Car::all();
        }

        

        return view('welcome' , ['cars'=>$cars, 'search'=>$search]);
    }

    public function cadastroCarro(){
        return view('events.cadastroCarro');
    }

    public function store(Request $request){

        $car = new Car();

        $car->name = $request->name;
        $car->description = $request->description;
        $car->mark = $request->mark;
        $car->date = $request->date;
        $car->color = $request->color;
        $car->value = $request->value;
        $car->rented = $request->rented;
        $car->items = $request->items;


        //Image Upload
        if($request->hasFile('image') && $request->File('image')->isValid() ){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path("img/cars"), $imageName);

            $car->image = $imageName;
        }

        $user = auth()->user();
        $car->user_id = $user->id;

        $car->save();

        return redirect('/')->with("msg","Carro cadastrado com sucesso!");

    }

    public function show($id){

        $car = Car::findOrFail($id);

        return view('events.show', ['car' => $car]);

    }

    public function car(){
        $cars = Car::all();

        return view('carros', ['carros'=>$cars]);
    }

}
