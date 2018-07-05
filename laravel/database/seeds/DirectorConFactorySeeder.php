<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DirectorConFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Director::class, 50)->create();
        
    }
}
