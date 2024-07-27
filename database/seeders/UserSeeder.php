<?php

namespace Database\Seeders;

use App\Constants\Gender;
use App\Models\User;
use Carbon\Carbon;
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
        $users = [
            [
                'nama' => 'Wintari',
                'email' => 'kadekwintari27@gmail.com',
                'password' => Hash::make('wintari'),
                'jns_kel' => Gender::PEREMPUAN,
                'tgl_lahir' => Carbon::create(2002, 04, 27)->format('Y-m-d')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
