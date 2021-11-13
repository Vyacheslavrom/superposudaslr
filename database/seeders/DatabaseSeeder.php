<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           /**
     * Запустить наполнение базы данных.
     *
     * @return void
     */
        $this->call([
            DeskSeeder::class,
            DeskListSeeder::class,
            CardSeeder::class,
            TaskSeeder::class
            


        ]);

        //Card::factory()->count(50)->create();


    }
}
