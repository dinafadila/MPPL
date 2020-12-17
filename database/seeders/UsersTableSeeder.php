<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('students')->insert([
            'user_id' => 1,
            'name' => 'Budi Utomo',
            'gender' => 'Laki-laki',
            'place_of_birth' => 'jakarta',
            'date_of_birth' => '1945-08-17',
            'religion' => 'Islam',
            'date_of_entry' => '2020-12-17',
            'address' => 'Jakarta Tengah',
            'phone' => '14045',
            'father_name' => 'Ki Hajar Dewantoro',
            'mother_name' => 'Kartini',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('reports')->insert([
            'student_id' => 1,
            'group' => 'A',
            'semester' => 7,
            'school_year' => '2025/2056',
            'religion_and_moral' => 'baik',
            'social_emotional_and_autonomy' => 'baik sekali',
            'language' => 'baik baik saja',
            'cognitive' => 'baik sepertinya',
            'physical' => 'sangat baik',
            'art' => 'baik ga ya',
            'extracurricular' => 'Berjemur',
            'grade_of_extracurricular' => 'B',
            'description' => 'Siswa sangat senang berjemur',
            'sick' => 2,
            'permit' => 3,
            'absent' => 1,
            'note_for_parents' => 'anaknya aktif ya bund',
            'date_of_report' => '2020-12-17',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('fees')->insert([
            'student_id' => 1,
            'july' => 100,
            'august' => 100,
            'september' => 100,
            'october' => 100,
            'november' => 100,
            'december' => 100,
            'january' => 100,
            'february' => 100,
            'march' => 100,
            'april' => 100,
            'may' => 100,
            'june' => 100,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('calendars')->insert([
            'name_of_event' => 'Hari Lebaran',
            'date_of_start' => '2020-01-01',
            'date_of_end' => '2020-12-31',
            'information' => 'Seluruh Hari diliburkan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
