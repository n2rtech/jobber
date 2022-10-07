<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'                =>  1,
            'name'              =>  'Administrator',
            'email'             =>  'hello@eventmedia.ie',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-01 00:00:28',
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk1',
        ]);

        User::create([
            'id'                =>  2,
            'name'              =>  'Administrator',
            'email'             =>  'info@daltontv.ie',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-02 00:00:28',
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk2',
        ]);

        User::create([
            'id'                =>  3,
            'name'              =>  'Administrator',
            'email'             =>  'Moh.abed@callofservice.com',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-03 00:00:28',
            'password'          =>  Hash::make('password'),
            'status'            =>  0,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk3',
        ]);

        User::create([
            'id'                =>  4,
            'name'              =>  'Administrator',
            'email'             =>  'newcrm@daltontv.ie',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-04 00:00:28',
            'password'          =>  Hash::make('newcrm'),
            'status'            =>  1,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk4',
        ]);

        User::create([
            'id'                =>  5,
            'name'              =>  'Administrator',
            'email'             =>  'padraig@howlin.ie',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-05 00:00:28',
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk5',
        ]);

        User::create([
            'id'                =>  6,
            'name'              =>  'Administrator',
            'email'             =>  'tom@iol.ie',
            'role'              =>  'administrator',
            'email_verified_at' =>  '2022-10-06 00:00:28',
            'password'          =>  Hash::make('password'),
            'status'            =>  0,
            'remember_token'    =>  'B7HGwLouNXqkgxzPgOshSHwiua74GJAa3ohn51WUQ6lSxR8qCWgDxnxO3Vk6',
        ]);
    }
}
