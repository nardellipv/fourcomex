<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();
        $sections = [
            ['section' => 'PRINCIPAL'],
            ['section' => 'SLIDER'],
            ['section' => 'PRODUCTO'],
        ];

        foreach ($sections as $section) {
            \App\Section::create($section);
        }
    }
}
