<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::create([
            'name'=>'Admin Utama'
            ,'email'=>'admin@admin.com'
            ,'password'=>bcrypt('admin')
        ]);

        DB::table('nips')->insert([
            'nip'=>'0303980303240002'
            ,'name'=>'Admin Utama'
        ]);

        DB::table('lecturers')->insert([
            'nip_id'=>DB::getPdo()->lastInsertId()
            ,'name'=>'Admin Utama'
            ,'phone_number'=>'089612345678'
            ,'address'=>'Graha Maju Jl. Lurus No.69'
        ]);
    }
}
