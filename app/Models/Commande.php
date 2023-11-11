<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['debut_location','fin_location','client_id','car_id'];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function cars()
    {
        return $this->BelongsTo(Car::class);
    }
}
