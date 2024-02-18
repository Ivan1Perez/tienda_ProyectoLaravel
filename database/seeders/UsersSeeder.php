<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioAdmin = [
            'login' => "root",
            'password' => bcrypt("root"),
            'dni' => "11111111K",
            'rol' => 'admin'
        ];
        User::create($usuarioAdmin);
        User::factory()->count(12)->create();
    }
}
