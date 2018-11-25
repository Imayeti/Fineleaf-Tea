<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $bob = new \App\User;
        $bob->name = "Bob";
        $bob->email = 'bob@bob.bob';
        $bob->password = bcrypt('secret');
        $bob->products = [1,2,3];
        $bob->save();
    }
}
