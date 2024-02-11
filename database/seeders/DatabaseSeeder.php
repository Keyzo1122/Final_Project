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

        DB::table('facultys')->insert([
            'faculty'=>'Fakultas Teknologi Elektronika dan Informatika Cerdas'
            ,'major'=>'Teknik Informatika'
        ]);

        DB::table('collegers')->insert([
            'faculty_id'=>1
            ,'nim'=>'029100001'
            ,'name'=>'Subkhan Dimas Pratama Putra'
            ,'address'=>'Jl. Teknik Informatika No.1'
        ]);

        DB::table('lessons')->insert([
            'lecturer_id'=>1
            ,'faculty_id'=>1
            ,'lesson'=>'Laravel'
            ,'sks'=>'4'
        ]);

        DB::table('grades')->insert([
            'colleger_id'=>1
            ,'lesson_id'=>1
            ,'name'=>'Subkhan Dimas Pratama Putra'
            ,'grade'=>'A'
            ,'semester'=>'8'
        ]);
    }
}
