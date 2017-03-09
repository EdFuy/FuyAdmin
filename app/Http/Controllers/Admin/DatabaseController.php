<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    //
    public function index(){
        return view('admin.database.index');
}
}
