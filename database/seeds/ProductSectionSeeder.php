<?php

use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductSection::class, 1)->create();
    }
}
