<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller {
    public function index() {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }
    
    public function store(Request $request) {
        Account::create($request->all());
        return redirect('/');
    }
    
    public function update(Request $request) {
        $account = Account::find($request->id);
        $account->update($request->all());
        return redirect('/');
    }
    
    public function destroy(Request $request) {
        Account::destroy($request->id);
        return redirect('/');
    }
}