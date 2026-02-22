<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed default admin
        \App\Models\AdminUser::updateOrCreate(
            ['username' => 'admin'],
            ['password' => \Illuminate\Support\Facades\Hash::make('wot_pk_2026')]
        );
    }
}
