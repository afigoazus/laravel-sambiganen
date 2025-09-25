<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
        (1, 'oke', 'oke@gmail.com', NULL, '\$2y\$12\$PkurnAUxEZYQxUlQS4Mek.KgtDoXOzHjn28O0.TTAdFLLo/j4Z9v6', NULL, '2024-09-23 19:12:54', '2024-09-23 19:12:54');");

    }
}
