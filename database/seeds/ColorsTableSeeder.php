<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors[] = ['name' =>'Black (Granule Rubber)'];
        $colors[] = ['name' =>'Terra Cotta Red'];
        $colors[] = ['name' =>'Red'];
        $colors[] = ['name' =>'Pearl'];
        $colors[] = ['name' =>'Rainbow Blue'];
        $colors[] = ['name' =>'Rainbow Green'];
        $colors[] = ['name' =>'Patina Green'];
        $colors[] = ['name' =>'Yellow'];
        $colors[] = ['name' =>'Tan'];

        \Illuminate\Support\Facades\DB::table('colors')->insert($colors);
    }
}
