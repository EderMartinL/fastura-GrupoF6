<?php

use App\Models\System\User;

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nuevo usuario:
        User::create([
            'name' => 'Martin',
            'email' => 'senati@gmail.com',
            'password' => Hash::make('senati123'),
        ]);
    }
}
