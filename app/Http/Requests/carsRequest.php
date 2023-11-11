<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class carsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'marque' => 'required',
            'model' => 'required',
            'vitesse' => 'required',
            'prix_location' => 'required',
            'url_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'quantity' => 'required',
            'plaque' => 'required|unique:cars,plaque',
            // 'etat' => 'required'
        ];
    }

    public function messages()
    {
        return  [
            'marque.required' => 'La marque de la voiture est requit',
            'model.required' => 'Le modele de la voiture est requit',
            'vitesse.required' => 'La vitesse de la voiture est requit',
            'prix_location.required' => 'La prix de location de la voiture est requit',
            'url_image.required' => 'L\'image de la voiture est requit',
            'url_image.image' => 'le fichier doit etre une image',
            'url_image.mime' => 'le fichier doit avoir le format jpeg,png,jpg',
            'url_image.max' => 'le fichier doit avoir une taille inferieure à 2MB',
            'quantity.required' => 'Le nombre de cette voiture est requit',
            'plaque.required' => 'La plaque est requit',
            // 'etat.required' => 'L\'etat de la voiture de la voiture est requit',
        ];
    }
}
