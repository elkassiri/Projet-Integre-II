<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table='contact';
    protected $fillable=['fname','lname','mail','phone','message','id_prop'];
    public function essai()
    {
    	return $this->belongsTo(Immobilier::class);
    }
}
