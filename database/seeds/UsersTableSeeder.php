<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();


        //
        DB::table('users')->insert([
            [
                'firstname' => $faker->unique()->firstName,
                'lastname'  => $faker->unique()->lastName,
                'username'  => $faker->unique()->userName,
                'email'     => 'honorezemagho@gmail.com',
                'phone'     => $faker->unique()->e164PhoneNumber,
                'role_id'   => 1,
                'gender'    => 'male',
                'password'  => Hash::make('password'),
            ],
            [
                'firstname' => $faker->unique()->firstName,
                'lastname'  => $faker->unique()->lastName,
                'username'  => $faker->unique()->userName,
                'email'     => $faker->unique()->freeEmail,
                'phone'     => $faker->unique()->e164PhoneNumber,
                'role_id'   => 1,
                'gender'    => 'male',
                'password'  => Hash::make('password'),
            ],
            [
                'firstname' => $faker->unique()->firstName,
                'lastname'  => $faker->unique()->lastName,
                'username'  => $faker->unique()->userName,
                'email'     => $faker->unique()->freeEmail,
                'phone'     => $faker->unique()->e164PhoneNumber,
                'role_id'   => 2,
                'gender'    => 'female',
                'password'  => Hash::make('password'),
            ],
            [
                'firstname' => $faker->unique()->firstName,
                'lastname'  => $faker->unique()->lastName,
                'username'  => $faker->unique()->userName,
                'email'     => $faker->unique()->freeEmail,
                'phone'     => $faker->unique()->e164PhoneNumber,
                'role_id'   => 2,
                'gender'    => 'male',
                'password'  => Hash::make('password'),
            ],
            [
                'firstname' => $faker->unique()->firstName,
                'lastname'  => $faker->unique()->lastName,
                'username'  => $faker->unique()->userName,
                'email'     => $faker->unique()->freeEmail,
                'phone'     => $faker->unique()->e164PhoneNumber,
                'role_id'   => 2,
                'gender'    => 'female',
                'password'  => Hash::make('password'),
            ],
        ]);
    }
}
