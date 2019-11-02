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
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin ultricies eros eu pulvinar. Quisque id lorem sed 
             sapien blandit varius condimentum a elit. Aenean ultrices quam sapien, id elementum enim porta et. Duis tristique risus vel tortor pulvinar, eu 
             ultrices dui dictum. Donec quis malesuada tellus. Donec eget est in risus tempus blandit eget eu lorem. Maecenas tincidunt lorem lectus, vitae 
             venenatis risus cursus eget. Maecenas ut nibh et sapien tincidunt eleifend. Nunc sed varius urna, sed sodales sapien.
             Donec sed condimentum risus. Nullam sit amet vehicula neque. Suspendisse et lacus nulla. Proin dui nisi, posuere eu quam ac, dignissim auctor mi.
             Etiam lorem ex, euismod eleifend ultricies sed, tempor molestie tellus. Curabitur vel tincidunt elit. Nam varius dolor a pellentesque pulvinar. 
             Vestibulum laoreet ante nec augue placerat pulvinar eget vel elit. Suspendisse orci libero, pretium vel mi vel, fringilla posuere sapien. Donec ut 
             augue consectetur, lobortis massa at, vestibulum elit. Mauris congue mauris a urna tristique varius. Etiam suscipit enim sit amet nunc ornare, 
             vitae iaculis diam efficitur.
             Etiam lorem ex, euismod eleifend ultricies sed, tempor molestie tellus. Curabitur vel tincidunt elit. Nam varius dolor a pellentesque pulvinar. 
             Vestibulum laoreet ante nec augue placerat pulvinar eget vel elit. Suspendisse orci libero, pretium vel mi vel, fringilla posuere sapien. Donec ut 
             augue consectetur, lobortis massa at, vestibulum elit. Mauris congue mauris a urna tristique varius. Etiam suscipit enim sit amet nunc ornare, 
             vitae iaculis diam efficitur.';
        $categories = [
            ['name' => 'Blackmer', 'description' => $description, 'slug' => 'blackmer', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'ALGAS', 'description' => $description, 'slug' => 'algas', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'EGSA', 'description' => $description, 'slug' => 'egsa', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'Hannay Reels', 'description' => $description, 'slug' => 'hannay_reels', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'MEC Marshal Excelsior', 'description' => $description, 'slug' => 'mec_marshal_excelsior', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'MGA', 'description' => $description, 'slug' => 'mga', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'Rochester', 'description' => $description, 'slug' => 'rochester', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'Red Seal', 'description' => $description, 'slug' => 'red_seal', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'WAC', 'description' => $description, 'slug' => 'wac', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '1'],
            ['name' => 'Blackmer', 'description' => $description, 'slug' => 'blackmer', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'Chester Valve', 'description' => $description, 'slug' => 'chester_valve', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'Cryo Diffusion', 'description' => $description, 'slug' => 'cryo_diffusion', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'EGSA', 'description' => $description, 'slug' => 'egsa', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'EC Marshal Excelsior', 'description' => $description, 'slug' => 'ec_marshal_excelsior', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'Metal Impact', 'description' => $description, 'slug' => 'metal_impact', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'MGA', 'description' => $description, 'slug' => 'mga', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'RegO', 'description' => $description, 'slug' => 'regO', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'WAC', 'description' => $description, 'slug' => 'wac', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '2'],
            ['name' => 'IKA', 'description' => $description, 'slug' => 'ika', 'photo' => 'https://lorempixel.com/640/480/?52953', 'provider_id' => '3'],
        ];

        foreach ($categories as $category) {
            \App\Category::create($category);
        }
    }
}
