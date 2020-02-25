<?php

namespace App\Http\Controllers;

use App\StaffUser;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $staff = StaffUser::all();


        return view('private.staff', compact('staff'));
    }

    public function home()
    {
        $user = auth()->User();
        return view('private.staffHomepage', compact('user'));
    }

    public function store()
    {
        $data = request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:2',
            'email' => 'required|email|unique:staff_users'
        ]);

        $staff = new StaffUser();
        $staff->first_name = request('first_name');
        $staff->last_name = request('last_name');
        $staff->email = request('email');

        $staff->save();

        return back();
    }
}
