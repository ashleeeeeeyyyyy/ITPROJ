<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'l_name'    =>  'Hilarion',
            'f_name'    =>  'Bill',
            'm_name'    =>  'Reyes',
            'office'    =>  'Cashier',
            'position'  =>  'Head',
            'username'  =>  'bill',
            'password'  =>  Hash::make('loading'),
        ]);
    }
}
