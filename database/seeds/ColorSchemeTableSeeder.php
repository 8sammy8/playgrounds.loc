<?php

use Illuminate\Database\Seeder;

class ColorSchemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colorSchemes[] = [
            'name' => 'Backwoods',
            'img' => 'backwoods.png',
            'posts_clamps' => 'Posts clamps 1',
            'metal_rails' => 'Metal rails 1',
            'roofs' => 'Roof 1',
            'slides' => ' Slide 1',
            'plastic_climbers' => 'Plastic climbers 1',
            'panels' => 'Panel 1',
            'panel_accents' => 'Panel accents 1',
            'accessories' => 'Accessories 1',
            'bridges' => 'Bridges 1',
            'default' => null,
        ];
        $colorSchemes[] = [
            'name' => 'Beachball',
            'img' => 'beachball.png',
            'posts_clamps' => 'Posts clamps 2',
            'metal_rails' => 'Metal rails 2',
            'roofs' => 'Roof 2',
            'slides' => ' Slide 2',
            'plastic_climbers' => 'Plastic climbers 2',
            'panels' => 'Panel 2',
            'panel_accents' => 'Panel accents 2',
            'accessories' => 'Accessories 2',
            'bridges' => 'Bridges 2',
            'default' => null,
        ];
        $colorSchemes[] = [
            'name' => 'Cascade',
            'img' => 'cascade.png',
            'posts_clamps' => 'Posts clamps 3',
            'metal_rails' => 'Metal rails 3',
            'roofs' => 'Roof 3',
            'slides' => ' Slide 3',
            'plastic_climbers' => 'Plastic climbers 3',
            'panels' => 'Panel 3',
            'panel_accents' => 'Panel accents 3',
            'accessories' => 'Accessories 3',
            'bridges' => 'Bridges 3',
            'default' => null,
        ];

        \Illuminate\Support\Facades\DB::table('color_schemes')->insert($colorSchemes);
    }
}
