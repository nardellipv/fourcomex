<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            ['name'=>'Blackmer', 'slug' =>'blackmer', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'ALGAS', 'slug' =>'algas', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'EGSA', 'slug' =>'egsa', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'Hannay Reels', 'slug' =>'hannay_reels', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'MEC Marshal Excelsior', 'slug' =>'mec_marshal_excelsior', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'MGA', 'slug' =>'mga', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'Rochester', 'slug' =>'rochester', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'Red Seal', 'slug' =>'red_seal', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'WAC', 'slug' =>'wac', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'1'],
            ['name'=>'Blackmer', 'slug' =>'blackmer', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'Chester Valve', 'slug' =>'chester_valve', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'Cryo Diffusion', 'slug' =>'cryo_diffusion', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'EGSA', 'slug' =>'egsa', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'EC Marshal Excelsior', 'slug' =>'ec_marshal_excelsior', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'Metal Impact', 'slug' =>'metal_impact', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'MGA', 'slug' =>'mga', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'RegO', 'slug' =>'regO', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'WAC', 'slug' =>'wac', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'2'],
            ['name'=>'IKA', 'slug' =>'ika', 'photo'=>'https://lorempixel.com/640/480/?52953','provider_id'=>'3'],
        ];

        foreach ($categories as $category) {
            \App\Category::create($category);
        }
    }
}
