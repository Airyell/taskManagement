<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::insert([
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'role' => 'Manager'],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'role' => 'Developer'],
            ['name' => 'Charlie Lee', 'email' => 'charlie@example.com', 'role' => 'Designer'],
        ]);
    }
}

