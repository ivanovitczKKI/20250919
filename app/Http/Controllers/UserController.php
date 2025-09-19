<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
		$users = User::all();
		// SELECT * FROM users;

		$user = User::find(1);
		// berdasarkan ID
		// SELECT * FROM users WHERE id = 1 LIMIT 1;

		$user = User::where('username', '=', 'ibas')
			->first();
		// berdasarkan kolom username
		// SELECT * FROM users WHERE username = 'ibas' LIMIT 1;

		$users = User::where('username', '!=', 'ivan')
			->get();
		//Negasi, username tidak sama dengan ivan

		$users = User::orderBy('username', 'desc')
			->get();
		// Urutkan berdasarkan username secara descending

		dd($users);
	}

	public function create() {
		$user = User::create([
			'name' => 'Azeezah',
			'username' => 'azeezah',
			'email' => 'azeezah@example.com',
			'password' => bcrypt('password123')
		]);

		dd($user);
	}

	public function update($id) {
		//Mencari user berdasarkan id
		$user = User::find($id);

		//Mengupdate data user
		$user->update([
			'username' => 'ibas ganteng',
			'name' => 'Ibas Sukses'
		]);

		//cara akses kolom data user
		//$user->nama_kolom
		dd($user->password);
	}

	public function delete($id) {
		$user = User::find($id);
		$user->delete();
	}
}
