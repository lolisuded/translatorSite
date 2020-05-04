<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'id' => Config()->get('enums.services.Translate'),
            'Description' => 'Translate',
        ]);

        DB::table('services')->insert([
            'id' => Config()->get('enums.services.Interpret'),
            'Description' => 'Interpret',
        ]);
    }
}
