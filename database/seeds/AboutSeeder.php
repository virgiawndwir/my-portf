<?php

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            'id' => 1,
            'email' => 'mail@dwirangga.my.id',
            'phone' => '+6281287188918',
            'freelance' => 'available',
            'address' => 'Bogor City, Wes Java',
            'linkedin'  => 'linkedin.com/in/virgiawndwir'
        ]);
    }
}
