<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class ManageAccountsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $allUsers = DB::table('users')->get();
        $allUsers = User::all();

        $data = [
            'status'  => $user->status,
            'role'   => $user->role,
            'users' => $allUsers
        ];
        return view('pages.manageAccounts')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser_status(Request $request, $id)
    {
        $user = User::find($id);

        // update account status
        $user->status = $request->input('status');

        $user->save();
        return redirect('/manageAccounts')->with('success', 'Status Updated');
    }
}
