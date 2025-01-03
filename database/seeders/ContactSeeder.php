<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'no_tlpn' => '081262418410',
                'email' => 'admin@example.com',
                'lokasi' => 'metro timur,lampung, indonesia',
            ],
            ];

            foreach ($contacts as $contact) {
                contact::create($contact);
              }
    }
}
