<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('states')->delete();

        $states = array(
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'FC', 'state_name' => 'Abuja'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'AB', 'state_name' => 'Abia'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'AD', 'state_name' => 'Adamawa'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'AK', 'state_name' => 'Akwa Ibom'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'AN', 'state_name' => 'Anambra'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'BA', 'state_name' => 'Bauchi'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'BY', 'state_name' => 'Bayelsa'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'BE', 'state_name' => 'Benue'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'BO', 'state_name' => 'Borno'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'CR', 'state_name' => 'Cross River'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'DE', 'state_name' => 'Delta'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'EB', 'state_name' => 'Ebonyi'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'ED', 'state_name' => 'Edo'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'EK', 'state_name' => 'Ekiti'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'EN', 'state_name' => 'Enugu'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'GO', 'state_name' => 'Gombe'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'IM', 'state_name' => 'Imo'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'JI', 'state_name' => 'Jigawa'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KD', 'state_name' => 'Kaduna'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KN', 'state_name' => 'Kano'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KT', 'state_name' => 'Katsina'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KE', 'state_name' => 'Kebbi'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KO', 'state_name' => 'Kogi'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'KW', 'state_name' => 'Kwara'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'LA', 'state_name' => 'Lagos'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'NA', 'state_name' => 'Nassarawa'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'NI', 'state_name' => 'Niger'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'OG', 'state_name' => 'Ogun'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'ON', 'state_name' => 'Ondo'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'OS', 'state_name' => 'Osun'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'OY', 'state_name' => 'Oyo'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'PL', 'state_name' => 'Plateau'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'RI', 'state_name' => 'Rivers'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'SO', 'state_name' => 'Sokoto'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'TA', 'state_name' => 'Taraba'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'YO', 'state_name' => 'Yobe'),
            array('state_uuid' => Str::orderedUuid(), 'country_uuid' => '', 'state_alias' => 'ZA', 'state_name' => 'Zamfara'),
        );

        DB::table('states')->insert($states);
    }
}
