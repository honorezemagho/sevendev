<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            [
                'name' => "Member",
                'slug' => "Community Member",
            ],
            [
                'name' => "Mentor",
                'slug' => "Community Member",
            ],
            [
                'name' => "Sponsor",
                'slug' => "Community Member",
            ],
            [
                'name' => "Lead",
                'slug' => "Patron/Matron",
            ],
        ]);
    }
}
