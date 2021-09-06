<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new Admin();
        $admin->name = 'Quarm';
        $admin->email = 'quarm@gmail.com';
        $admin->password = bcrypt('12345');
        $admin->remember_token = true;
        $admin->save();

    }
}
