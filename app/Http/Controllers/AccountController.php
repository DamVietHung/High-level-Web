<?php
namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function store(Request $request)
    {
        Account::create([
            'name' => $request->name,
            'role' => $request->role,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'birthdate' => $request->birthdate
        ]);

        return redirect()->route('accounts.index');
    }

    public function destroy($id)
    {
        Account::destroy($id);
        return redirect()->route('accounts.index');
    }
}
