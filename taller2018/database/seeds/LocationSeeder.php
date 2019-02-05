<?php

use Illuminate\Database\Seeder;
use App\Home;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loc = new Home();
        $loc->city = 'La Paz';
        $loc->lat = '-16.5112527';
        $loc->lng = '-68.12922516';
        $loc->save();

    }
}
