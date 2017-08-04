<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'BUI1UNIT1',
                'type' => 1,
                'size' => 120,
                'floor_id' => 1,
                'number' => 1,
                'is_active' => 1,
                'picture' => '0b04bcef6e15790faed2031eae936acc.png',
            ),
        ));
        
        
    }
}