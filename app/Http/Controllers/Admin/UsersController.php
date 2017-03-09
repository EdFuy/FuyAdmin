<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UsersController extends Controller
{
    //
    public function users(){
        return view('admin.users.users');
    }
}
