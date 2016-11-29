<?php

use App\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory(User::class)->create([
            'name' => 'Alejandro',
            'email' => 'alejandro.seisdedos@gft.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        factory(User::class, 50)->create();
    }
}
