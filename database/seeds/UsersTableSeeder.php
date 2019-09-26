<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();

        for($i =1;$i<21;$i++){
            $user = User::create([
                'name'=> "Samuel{$i}",
                "email" => "raul{$i}@gmail.com",
                "password" => "12345"
            ]);
        }
    }
}
