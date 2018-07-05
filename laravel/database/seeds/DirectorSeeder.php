<?php

use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $director = new \App\Models\Director([
            'first_name' => 'George',
            'last_name'  => 'Lucas',
            'awards'     => 10,
        ]);
        
        $director->save();
        
        
        \App\Models\Director::create([
            'first_name' => 'James',
            'last_name'  => 'Cameron',
            'awards'     => 11,
        ]);
    }
}
