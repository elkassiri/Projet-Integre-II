<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table='immobiliers';
    protected $fillable=['name','location','price','area','nb_rooms','photo','description'];
}
