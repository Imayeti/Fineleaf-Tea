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
        $bob->products = [['product' => 4, 'quantity' => 2],['product' => 5, 'quantity' => 2],['product' => 3, 'quantity' => 4]];
        $bob->gifts = [3];
        $bob->save();
    }
}
