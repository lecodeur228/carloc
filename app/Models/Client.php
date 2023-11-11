<?php

namespace App\Models;

use App\Models\Message;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['id','firstname','lastname','age','email','email', 'telephone','verification' ,'image_cart_url'];

    public function commandes(){
        return $this->hasMany(Commande::class);
    }

    public function messages()
    {
        return $this->HasMany(Message::class);
    }
}
