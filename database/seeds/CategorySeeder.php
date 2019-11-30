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
        $description = '.';
        $categories = [
            ['name' => 'Blackmer', 'description' => $description, 'slug' => 'blackmer', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'ALGAS', 'description' => $description, 'slug' => 'algas', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'EGSA', 'description' => $description, 'slug' => 'egsa', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'Hannay Reels', 'description' => $description, 'slug' => 'hannay_reels', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'MEC Marshal Excelsior', 'description' => $description, 'slug' => 'mec_marshal_excelsior', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'MGA', 'description' => $description, 'slug' => 'mga', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'Rochester', 'description' => $description, 'slug' => 'rochester', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'Red Seal', 'description' => $description, 'slug' => 'red_seal', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'WAC', 'description' => $description, 'slug' => 'wac', 'photo' => '', 'provider_id' => '1'],
            ['name' => 'Blackmer', 'description' => $description, 'slug' => 'blackmer', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'Chester Valve', 'description' => $description, 'slug' => 'chester_valve', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'Cryo Diffusion', 'description' => $description, 'slug' => 'cryo_diffusion', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'EGSA', 'description' => $description, 'slug' => 'egsa', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'MEC Marshal Excelsior', 'description' => $description, 'slug' => 'ec_marshal_excelsior', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'Metal Impact', 'description' => $description, 'slug' => 'metal_impact', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'MGA', 'description' => $description, 'slug' => 'mga', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'RegO', 'description' => $description, 'slug' => 'regO', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'WAC', 'description' => $description, 'slug' => 'wac', 'photo' => '', 'provider_id' => '2'],
            ['name' => 'IKA', 'description' => $description, 'slug' => 'ika', 'photo' => '', 'provider_id' => '3'],
            ['name' => 'CRYOQUIP', 'description' => $description, 'slug' => 'cryoquip', 'photo' => '', 'provider_id' => '2'],
        ];

        foreach ($categories as $category) {
            \App\Category::create($category);
        }
    }
}
