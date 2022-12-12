<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pendonor_data;
use App\Models\Pendonor_category;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
        ];

        $categories = [
            [
               'name'=>'Baru',
            ],
            [
               'name'=>'Lama',
            ],
        ];

        $pendonors = [
            [
                'user_id' => 2,
                'pendonor_category_id' => 1
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
        
        foreach ($categories as $key => $category) {
            Pendonor_category::create($category);
        }

        foreach ($pendonors as $key => $pendonor) {
            Pendonor_data::create($pendonor);
        }
    }
}
