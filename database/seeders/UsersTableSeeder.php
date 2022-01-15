<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class  UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
        \App\Models\User::factory(1)->create();
    }
    protected function createUser()
    {
        User::create([
            'name' => 'Runju',
            'email' => 'runju.raton1@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
