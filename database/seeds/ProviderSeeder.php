<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->delete();

        $providers = [
            ['name'=>'GLP', 'slug' =>'glp', 'order'=>'0'],
            ['name'=>'Gases Industriales', 'slug' =>'gases_industriales', 'order'=>'1'],
            ['name'=>'Mezcladoras', 'slug' =>'mezcladoras', 'order'=>'2'],
        ];

        foreach ($providers as $provider) {
            \App\Provider::create($provider);
        }
    }
}
