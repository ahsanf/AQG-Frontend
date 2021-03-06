<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'redirect_to' => 'admin.quiz.index'
            ],
            [
                'name' => 'user',
                'redirect_to' => 'quiz.index'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
