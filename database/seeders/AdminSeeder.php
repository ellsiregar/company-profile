<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'username' => 'admin1',
                'password' => bcrypt('password123'),
                'nama_admin' => 'Administartor 1',
                'email' => 'admin@example.com',
            ],
            ];

            foreach ($admins as $admin) {
              User::create($admin);
            }
    }
}
