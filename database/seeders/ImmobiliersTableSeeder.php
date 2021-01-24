<?php

namespace Database\Seeders;

use App\Models\Immobilier;
use Illuminate\Database\Seeder;

class ImmobiliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $immobilier=new Immobilier();
        $immobilier->name="new home4";
        $immobilier->location="Marrakech";
        $immobilier->price=1456974;
        $immobilier->area=456;
        $immobilier->nb_rooms=8;
        $immobilier->photo="home1.jng";
        $immobilier->save();

        $immobilier=new Immobilier();
        $immobilier->name="new home5";
        $immobilier->location="Marrakech";
        $immobilier->price=1456974;
        $immobilier->area=456;
        $immobilier->nb_rooms=8;
        $immobilier->photo="home2.jng";
        $immobilier->save();

        $immobilier=new Immobilier();
        $immobilier->name="new home6";
        $immobilier->location="Marrakech";
        $immobilier->price=1456974;
        $immobilier->area=456;
        $immobilier->nb_rooms=8;
        $immobilier->photo="home3.jng";
        $immobilier->save();



    }
}
