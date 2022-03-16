<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use App\Models\Roles;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Login::truncate();

        $adminRoles = Roles::where('name','admin')->first();
        $authorRoles = Roles::where('name','author')->first();
        $userRoles = Roles::where('name','user')->first();


        $admin = Login::create([
        	'admin_name' => 'test1',
        	'admin_email' => 'test@gmail.com',
        	'admin_phone' => '123456',
        	'admin_password' => md5('123456')
        ]);
        $author = Login::create([
        	'admin_name' => 'test2',
        	'admin_email' => 'test@gmail.com',
        	'admin_phone' => '123456',
        	'admin_password' => md5('123456')
        ]);
         $user = Login::create([
        	'admin_name' => 'test3',
        	'admin_email' => 'test@gmail.com',
        	'admin_phone' => '123456',
        	'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);
    }
}
