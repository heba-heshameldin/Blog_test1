<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\User;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'test@test.com';
        $user->password = bcrypt(12345678);
        $user->save();
        
      User::factory()->times(100)->create();

    }
}