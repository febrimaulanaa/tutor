<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function create()
	{
		$roles = Role::all();
		return view('admin.createuser', compact('roles'));
	}


	public function storeusers(UserStoreRequest $request)
	{
		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password)
		])->assignRole($request->role);
		return redirect()->back()->with('alert', 'Akun Berhasil Dibuat!');;
	}
}
