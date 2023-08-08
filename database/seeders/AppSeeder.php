<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apps')->insert([
            'app_name' => "rptsvr",
            'title' => "Report Server Application",
            'description' => "Aplikasi reporting tools",
            'baseurl' => 'rptsvr.modena.com',
            'sort' => 10,
        ]);
    }
}
