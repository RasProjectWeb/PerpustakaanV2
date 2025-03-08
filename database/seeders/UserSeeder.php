<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama'=>'admin',
            'alamat'=>'xxxx',
            'telepon'=>'12345',
            'email'=>'patrick@email.com',
            'password'=>Hash::make('patrick123'),
            'jenis'=>'admin'
        ]);
    }
}
