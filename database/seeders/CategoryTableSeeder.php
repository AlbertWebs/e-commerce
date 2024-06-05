<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 2,
                'cat' => 'Laptops',
                'slung' => 'laptops',
                'image' => 'Dell-XPS-9370-Laptop.jpg',
                'description' => '<div>There are different types of <b>car speaker’s</b>/ <b>mid-range</b>
speakers based on their cone size &amp; shape, place of install. The most
common types of speakers are; <br></div><div>
a)
4-inch speaker commonly known as dashboard
speakers <br></div><div>
b) 6.5 inch speakers commonly known as round/ door
speakers.</div><div>

c) 6 by 9 inch speakers commonly known as oval
speakers. <br></div><div>
d) 7 by 10-inch car speakers.

<br></div><div>e)10-inch car speakers. <br></div><div><br></div><div>
Car speakers are an essential part a cars entertainment,
&amp; are normally the first step to a car audio system upgrade.<br></div><div><br></div><div>

Shop for <b>Kenwood</b>, <b>Sony</b>, <b>JVC </b>&amp; <b>Pioneer</b> speakers all in
one place.

</div><br><br><br><br>',
'col' => '1',
'created_at' => '2019-04-30 20:32:57',
'updated_at' => '2019-04-30 20:32:57',
),
1 => 
array (
'id' => 3,
'cat' => 'Desktops',
'slung' => 'desktops',
'image' => '43.2.jpg',
'description' => '<div>Car Tweeter speakers may be the only component missing to complete your car audio setup. Tweeters purpose is to produce high audio frequencies.For speakers,tweeters make it seem like the sound is surrounded by a stage.</div><div><br></div><div>The most common types of car tweeters are Dome Tweeters &amp; Bullet tweeters with their difference in performance being realized in dispersion control &amp; efficiency.</div><div><br></div><div>Bullet tweeters have relatively a higher power output compared to dome tweeters.</div><div>For Personal Vehicles, tweeters are mostly mounted on either side of the dashboard close to the doors.</div><div><br></div><div>Shop for car tweeters by your favorite brand; Pioneer, Ken-wood &amp; Sony from the link below<br></div><div><a href="https://www.amanivehiclesounds.co.ke/products/cat/CAR%20TWEETERS" target="" rel="">https://www.amanivehiclesounds.co.ke/products/cat/CAR%20TWEETERS</a><br></div><br>',
'col' => '1',
'created_at' => '2019-05-01 07:49:41',
'updated_at' => '2019-05-01 07:49:41',
),
2 => 
array (
'id' => 4,
'cat' => 'Smartphones',
'slung' => 'smartphones',
'image' => 'Redmi-9T-Colors.jpg',
'description' => '<div>A car Sub woofer is a vital product (for music lovers) in any
car music system. Installing a sub woofer speaker in your car improves the
quality of the sound produced in a significant way.<br></div><div><br></div><div>

Car Sub woofers are designed to produce low frequency sounds
making any kind of music genre sound better. When choosing a Sub woofer for your
car sound system, there are a number of things to consider; Speaker size (depending
on your boot space), Enclosure type (sealed or ported). <br></div><div><br></div><div>
Bass Speakers, as they are commonly known are of Different
types;</div><div><br>

</div><ul><li>&nbsp;

<span><b>Standard
Sub woofer Speakers</b> -These sub&nbsp;woofers come individually without being fitted
in any type of enclosure in order to fit in every car. You can customize a
speaker cabinet for the sub woofer to your liking.</span>

<a href="https://www.amanivehiclesounds.co.ke/products/cat/CABINETS" target="" rel="">https://www.amanivehiclesounds.co.ke/products/cat/CABINETS</a>

&nbsp; <br></li></ul><br><ul><li><span><b>Bass Tube
Speakers</b> - A Bass Tube is a type of sub woofer where the speakers are
enclosed in a tube.</span></li></ul><br>&nbsp;<a href="https://www.amanivehiclesounds.co.ke/product/JBL%20CS1204T%20BASS%20TUBE%20SUBWOOFER" target="" rel="">https://www.amanivehiclesounds.co.ke/product/JBL%20CS1204T%20BASS%20TUBE%20SUBWOOFER</a>&nbsp;

<br><br><div><ul><li>&nbsp;<span><b>Powered
Sub woofers </b>– Also known as self-amplified sub woofers or Active sub woofers. This
is a type of sub woofers that are built into an enclosure which is powered by an
amplifier.</span> These sub woofers are also great for a fast and
easy upgrade and they allow you to save the maximum amount of space in your
vehicle. They allow the user to add bass while conserving space. Under this
category are Underseat sub woofers that are specially designed to fit below a
car seat.

&nbsp; </li></ul><br><br></div><div><br></div>',
'col' => '1',
'created_at' => '2019-05-01 08:55:37',
'updated_at' => '2019-05-01 08:55:37',
),
3 => 
array (
'id' => 5,
'cat' => 'Smartphone Accessories',
'slung' => 'smartphone-accessories',
'image' => '4.jpg',
'description' => '<div>A car Amplifier is the component that gives your music power
and Volume.

<span><b>Amplifiers</b> take a signal from the stereo and use an
independent power source to change it into a more powerful signal for the
speakers. The more power the amplifier delivers, the cleaner the sound from the
speakers. </span>

<br></div><div><br></div><div>Depending on the number of channels amplifier categories
are; Mono block, 2 channel,4 channel, 5 channel Amplifiers.

</div><br><br><br><br>',
'col' => '1',
'created_at' => '2019-05-01 09:05:52',
'updated_at' => '2019-05-01 09:05:52',
),
4 => 
array (
'id' => 6,
'cat' => 'TVs',
'slung' => 'tvs',
'image' => '6.jpg',
'description' => '<div>There are many types of car video monitors in the market today.
Car Monitors come in different shapes and sizes. The most Common types are as
follows;</div><div><br></div><ul><li> 

<span><b>Headrest
Car Video Monitors</b> – They come in different sizes, colors &amp; features.
Headrest Monitors are universal to all cars &amp; are installed by either
replacing the car headrest or by hanging (depending on type). Headrest monitors
are sold in pairs.</span>

·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></ul><br><ul><li><span><b>Flip Down
Car Video Monitors / Roof Mount</b> -&nbsp;
Roof Mount monitors come in different sizes &nbsp;&nbsp;11” 14”, 15”, 17”.</span>

·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></ul><br><ul><li><span>
<b>Dashboard
Monitors</b> – Normally looks like the computers normal monitor &amp; it stands
alone on the cars Dashboard. Dashboard Monitors come in different sizes.</span>

<span>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br></span></li><li><span>
<b>Rear View
Car Video Monitors </b>– Rear View Monitors come with straps to mount on the
existing car rear view mirror. You can use them to play Videos, listen to the
radio or as a reverse camera display.</span>

</li></ul><br><br><br>',
'col' => '2',
'created_at' => '2019-05-01 09:17:28',
'updated_at' => '2019-05-01 09:17:28',
),
5 => 
array (
'id' => 7,
'cat' => 'Music Systems',
'slung' => 'music-systems',
'image' => '1.jpg',
'description' => '<div>Shop for the Best Car Accessories at the best price in Kenya. Choose from a wide range of supplementary Components such as Jump stater, Smartphone holders FM expanders and many more.<br><br>Our Car Accessory products are suitable for all car types.</div><br><br><br><br>',
'col' => '2',
'created_at' => '2019-05-03 11:42:53',
'updated_at' => '2019-05-03 11:42:53',
),
6 => 
array (
'id' => 8,
'cat' => 'Gaming',
'slung' => 'gaming',
'image' => '3.jpg',
'description' => NULL,
'col' => '0',
'created_at' => '2020-10-07 18:08:17',
'updated_at' => '2020-10-07 18:08:17',
),
7 => 
array (
'id' => 9,
'cat' => 'Headphones',
'slung' => 'headphones',
'image' => '71U0L77xJrL._SY156_-min.jpg',
'description' => NULL,
'col' => '0',
'created_at' => '2020-10-07 18:13:21',
'updated_at' => '2020-10-07 18:13:21',
),
8 => 
array (
'id' => 10,
'cat' => 'Storage',
'slung' => 'storage',
'image' => 'T1TB.jpg',
'description' => NULL,
'col' => '1',
'created_at' => '2021-01-16 08:31:05',
'updated_at' => '2021-01-16 08:31:05',
),
9 => 
array (
'id' => 12,
'cat' => 'Backpacks',
'slung' => NULL,
'image' => 'swisgear-sa-8016-002.jpg',
'description' => NULL,
'col' => '0',
'created_at' => '2021-02-02 08:10:14',
'updated_at' => '2021-02-02 08:10:14',
),
10 => 
array (
'id' => 14,
'cat' => 'Cookers',
'slung' => NULL,
'image' => NULL,
'description' => NULL,
'col' => '0',
'created_at' => '2024-05-30 10:44:55',
'updated_at' => '2024-05-30 10:44:55',
),
));
        
        
    }
}