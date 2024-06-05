<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SitesettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sitesettings')->delete();
        
        \DB::table('sitesettings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitename' => 'Rick Electronics',
                'logo' => 'ricklogov2.png',
                'favicon' => 'Iconshow-Hardware-Headphone.ico',
                'email' => 'info@rickelectronics.co.ke',
                'email_one' => 'sales@rickelectronics.co.ke',
                'paypal' => 'albertmuhatia@gmail.com',
                'shipping' => 500,
                'mobile' => '+254721286034',
                'mobile_one' => '+254721286034',
                'mobile_two' => '+254721286034',
                'tagline' => 'We.Make.IT.Happen',
                'till' => '942527',
                'till_image' => 'Mpesaa.jpg',
                'url' => 'https://rickelectronics.co.ke/',
                'location' => 'Jitihada Mall, Taveta Road, Shop F25 Second Floor',
                'address' => NULL,
                'facebook' => 'https://web.facebook.com/Accessorieskenya254',
                'twitter' => 'https://web.facebook.com/Accessorieskenya254',
                'linkedin' => NULL,
                'instagram' => 'https://web.facebook.com/Accessorieskenya254',
                'youtube' => NULL,
                'google' => NULL,
                'welcome' => '1. Genuine Products<br>We offer a selection of quality authentic products. Buy from us with confidence!<br>2. Expert opinion<br>Get genuine views on matters car entertainment. We tell as it is!<br>3. Professional Installation services<br>Our Technicians have more than 10 year’s installation experience. Your car is in good hands!<br>4. Fast Delivery<br>Get your purchases delivered within the shortest time depending on your location. Time is money!<br>5. After service<br>In case of any product technicalities, feel free to reach out. We treat our customers’ right!<br>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}