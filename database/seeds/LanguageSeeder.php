<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'id' => Config()->get('enums.languages.DutchToEnglish'),
            'Description' => 'Dutch to English',
        ]);

        DB::table('languages')->insert([
            'id' => Config()->get('enums.languages.EnglishToDutch'),
            'Description' => 'English to Dutch',
        ]);

        DB::table('languages')->insert([
            'id' => Config()->get('enums.languages.DutchToArabic'),
            'Description' => 'Dutch to Arabic',
        ]);

        DB::table('languages')->insert([
            'id' => Config()->get('enums.languages.ArabicToDutch'),
            'Description' => 'Arabic to Dutch',
        ]);
    }
}
