<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
           'name' => '施罗伟',
            'email' => 'luoweis@126.com',
            'password'=> bcrypt('P@ssword991120'),
        ]);
    }
}
