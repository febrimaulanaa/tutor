<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function create()
	{
		return view('admin.createuser');
	}


	public function storeusers(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed'
		]);

		$users = new User;
		$users->name = $request->name;
		$users->email = $request->email;
		$users->password = Hash::make($request->password);
		$users->save();

		if ($users->id != NULL) {
			$role = new UserRole;
			$role->user_id = $users->id;
			$role->role_id = $request->role_id;
			$role->save();
		}

		Alert::success('Berhasil', 'Data Berhasil di Input');
		return redirect()->back();
	}
}
