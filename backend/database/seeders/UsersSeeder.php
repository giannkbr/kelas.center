<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
	public function run(): void
	{
		$superAdmin = User::create([
			'name' => 'Super Admin',
			'email' => 'superadmin@mail.com',
			'password' => bcrypt('password'),
		]);

		$admin = User::create([
			'name' => 'Admin',
			'email' => 'admin@mail.com',
			'password' => bcrypt('password'),
		]);

		$user = User::create([
			'name' => 'User',
			'email' => 'user@mail.com',
			'password' => bcrypt('password'),
		]);
	}
}
