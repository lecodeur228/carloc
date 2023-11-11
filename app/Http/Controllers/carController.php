<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\carsRequest;

class carController extends Controller
{
    public function index()
    {
        $cars = Car::get();
        return view('cars.index',compact('cars'));
    }
    public function create()
    {
        return view('cars.create');
    }
    public function doCreate(carsRequest $request)
    {
        $image = $request->file('url_image');
        $imageName = $request->marque . $request->model.$request->vitesse.'.'.$image->extension();
        // $image->move(public_path('images_cars'), $imageName);
        // $imageUrl = url('images_cars/'.$imageName);
        $path = $request->file('url_image')->storeAs('images_cars',$imageName, 'public');

        // dd($imageUrl);
        $cars = Car::create([
            'marque' => $request->marque,
            'model' => $request->model,
            'vitesse' => $request->vitesse,
            'quantity' => $request->quantity,
            'plaque' => $request->plaque,
            'prix_location' => $request->prix_location,
            'car_image' => $path,
            'en_location' => false,
            'etat' => "Propre",
        ]);

        return redirect()->back()->with('success','Voiture ajouter');
    }
}
