<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => 'admin',
            'status' => 1
        ]);
        User::create([
            'nama_pegawai' => 'Ahmad Rosyihuddin',
            'username' => 'rosyihuddin',
            'password' => '-'
        ]);
    }
}
