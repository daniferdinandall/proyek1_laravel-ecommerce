<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
