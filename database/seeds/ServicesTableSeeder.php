<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // check if table users is empty
      if(DB::table('services')->get()->count() == 0){

          DB::table('services')->insert([
          [
            'reference_id' => '2357111317',
            'type' => 'Schooling',
            'description' => 'Hogwarts School of Witchcraft and Wizardry',
            'service_started'=> Carbon::parse('2002-01-01'),
            'service_finished'=> Carbon::parse('2018-02-01'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ],

          [
            'reference_id' => '2357111310',
            'type' => 'Banking',
            'description' => 'Gringotts Wizarding Bank',
            'service_started'=> Carbon::parse('2002-01-01'),
            'service_finished'=> Carbon::parse('2018-02-01'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ],

          [
            'reference_id' => '1923293137',
            'type' => 'Boarding',
            'description' => 'Boarding at Hogwarts',
            'service_started'=> Carbon::parse('2002-01-01'),
            'service_finished'=> Carbon::parse('2018-02-01'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ],

          ]);

      } else { echo "services table is not empty, therefore NOT going ahead\n"; }
    }
}
