<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'email' => Str::random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//            'first_name' => Str::random(10),
//            'last_name' => Str::random(10),
//            'company' => Str::random(10),
//            'country' => Str::random(10),
//            'zip' => Str::random(10),
//        ]);
        factory(App\User::class, 50)->create();
    }
}
