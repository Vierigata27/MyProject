<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('staff')->insert([
                'nip' => rand(),
                'name' => uniqid('name_'),
                'gender' => Arr::random(['L', 'P']),
                'alamat' => uniqid('alamat_'),
                'email' => uniqid() . '@gmail.com',
                'foto' => uniqid('foto_'),
                'created_at' => now(),
                'updated_at' => null,
            ]);
        }
    }
}
