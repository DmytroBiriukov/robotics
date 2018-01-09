<?php

use Illuminate\Database\Seeder;
use App\Models\projects;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Projects::create([
            'title'        => 'Connect RaspberryPi with Arduino',
            'overview'     => 'This project demonstrates the way to connect RaspberryPi with Arduino by I2C. Both devices may send and receive data between each other.',
            'description'  => 'This project demonstrates the way to connect RaspberryPi with Arduino by I2C. Both devices may send and receive data between each other.',
            'user_id'          => 1,
        ]);

        Projects::create([
            'title'        => 'Measure temperature and humidity with Arduino',
            'overview'     => 'This project demonstrates how to use temperature/humidity sensor with Adruino.',
            'description'  => 'This project demonstrates how to use temperature/humidity sensor with Adruino.',
            'user_id'          => 1,
        ]);

        Projects::create([
            'title'        => 'Measure distance with Arduino',
            'overview'     => 'This project demonstrates how to use distance sensor with Adruino.',
            'description'  => 'This project demonstrates how to use distance sensor with Adruino.',
            'user_id'          => 1,
        ]);

        Projects::create([
            'title'        => 'Measure soil moisture with Arduino',
            'overview'     => 'This project demonstrates how to use soil moisture sensor with Adruino.',
            'description'  => 'This project demonstrates how to use soil moisture sensor with Adruino.',
            'user_id'          => 1,
        ]);


    }
}
