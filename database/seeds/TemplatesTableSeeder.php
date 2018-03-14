<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Templates Seeder for templates information
    	$templates = $this->getAllTemplates();

    	foreach($templates as $template) {
    		DB::table('templates')->insert([
    			'template_id' => $template[0],
    			'summary' => $template[1],
    			'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
    	}
    }

    public function getAllTemplates()
    {
    	$templates = array();

      $templates[] = [
    	"TMP-MG-01", "Payment Reminder"
    	];

      $templates[] = [
      "TMP-MG-01", "Payment Reminder"
      ];

      $templates[] = [
    	"TMP-MG-02", "Payment Reminder"
    	];

      $templates[] = [
    	"TMP-MG-03", "School Rules Notification"
    	];

      $templates[] = [
    	"TMP-MG-04", "Payment Reminder"
    	];

      $templates[] = [
      "TMP-MG-05", "Bank Statement"
      ];
      return $templates;
    }
}
