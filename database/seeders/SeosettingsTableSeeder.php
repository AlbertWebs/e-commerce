<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeosettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seosettings')->delete();
        
        \DB::table('seosettings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitename' => 'Rick Electronics',
                'intro' => 'Your ultimate destination for Smart TVs, Google TVs, Home Theatres, Free Standing Cookers, desktop computers, laptops, headphones, smartphones, and smartphone accessories. We offer an extensive selection from renowned brands like TCL, Vitron, Hisense, Vision Plus, HP, Toshiba, Samsung, OPPO, Philips, and more.',
                'email' => NULL,
                'email_one' => NULL,
                'tagline' => 'No excuses for playing good Music',
                'url' => 'https://rickelectronics.co.ke/',
                'location' => NULL,
                'address' => NULL,
                'facebook' => NULL,
                'twitter' => '@rickelectronics',
                'linkedin' => NULL,
                'instagram' => NULL,
                'youtube' => NULL,
                'google' => NULL,
                'welcome' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}