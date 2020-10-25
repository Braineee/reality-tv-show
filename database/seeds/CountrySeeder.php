<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('countries')->delete();

        $countries = array(
            array('country_uuid' => Str::orderedUuid(),'country_alias' => 'NG','country_name' => "Nigeria"),
        );

        DB::table('countries')->insert($countries);
    }
}