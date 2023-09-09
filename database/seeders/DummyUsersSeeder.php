<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dumydata = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'operator'
            ],
            [
                'name' => 'Mas Marketing',
                'email' => 'marketing@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'marketing'
            ],
            [
                'name' => 'Mas Keuangan',
                'email' => 'keuangan@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'keuangan'
            ],
        ];

        foreach ($dumydata as $key => $val) {
            User::create($val);
        }
    }
}