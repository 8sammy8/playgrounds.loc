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
            'name' => 'Egyptian',
            'proportions' => '50/50',
            'default' => 1,
        ];

        $colorLayouts[] = [
            'color_scheme_id' => 1,
            'number' => 1,
            'color_id' => 1,
        ];
        $colorLayouts[] = [
            'color_scheme_id' => 1,
            'number' => 2,
            'color_id' => 2,
        ];

        $colorSchemes[] = [
            'name' => 'Eiffel',
            'proportions' => '34/66',
            'default' => 1,
        ];

        $colorLayouts[] = [
            'color_scheme_id' => 2,
            'number' => 1,
            'color_id' => 4,
        ];
        $colorLayouts[] = [
            'color_scheme_id' => 2,
            'number' => 2,
            'color_id' => 5,
        ];
        $colorSchemes[] = [
            'name' => 'Mix',
            'proportions' => '33/33/34',
            'default' => 1,
        ];

        $colorLayouts[] = [
            'color_scheme_id' => 3,
            'number' => 1,
            'color_id' => 6,
        ];
        $colorLayouts[] = [
            'color_scheme_id' => 3,
            'number' => 2,
            'color_id' => 7,
        ];
        $colorLayouts[] = [
            'color_scheme_id' => 3,
            'number' => 3,
            'color_id' => 8,
        ];

        \Illuminate\Support\Facades\DB::table('color_schemes')->insert($colorSchemes);
        \Illuminate\Support\Facades\DB::table('color_layouts')->insert($colorLayouts);
    }
}
