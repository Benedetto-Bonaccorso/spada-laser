<?php

namespace Database\Seeders;

use App\Models\LightSaber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LightSaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spade=config('lightsaberdata.sabers');
        foreach ($spade as $spada) {

            $lightsaber = new LightSaber();
            $lightsaber->name = $spada["name"];
            $lightsaber->image = $spada["img"];
            $lightsaber->description = $spada["description"];
            $lightsaber->price = $spada["price"];
            $lightsaber->save();
        }
    }
}
