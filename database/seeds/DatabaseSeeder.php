<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id'    => 1,
            'name' => 'Virgiawan',
            'email' => 'mail@dwirangga.my.id',
            'password' => bcrypt('admin123')
        ]);
        $this->call(AboutSeeder::class);
    }
}
