<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'super@moneysewa.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin Admin',
                'email' => 'admin@moneysewa.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Agent Agent',
                'email' => 'agent@moneysewa.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Sub Agent',
                'email' => 'subagent@moneysewa.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Client Client',
                'email' => 'client@moneysewa.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'User User',
                'email' => 'user@moneysewa.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $index => $u) {
            $user = User::create($u);
            $this->assignRole($index, $user);
        }
        Schema::enableForeignKeyConstraints();
    }

    private function assignRole($index, $user)
    {
        switch ($index) {
            case 0:
                $user->assignRole('Super Admin');
                break;
            case 1:
                $user->assignRole('Admin');
                break;
            case 2:
                $user->assignRole('Agent');
                break;
            case 3:
                $user->assignRole('Sub Agent');
                break;
            case 4:
                $user->assignRole('Client');
                break;
            case 0:
                $user->assignRole('User');
                break;
            default:
                # code...
                break;
        }
    }
}
