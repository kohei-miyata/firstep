<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'k',
            'email' => 'test@test.test',
            'email_verified_at' => now(),
            'password' => Hash::make('1234567890'),
        ]);
    }
}
