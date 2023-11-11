<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['marque', 'model','vitesse', 'prix_location','car_image','quantity', 'plaque', 'en_location','etat'];

    public function commandes()
    {
        return $this->HasMany(Commande::class);
    }
}
