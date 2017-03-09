<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MenusController extends Controller
{
    //
    public function index(){
        $menuList = DB::table('Menus')->get();
        $data['list'] = $menuList;
       return view('admin.menus.index')->with("data",$data);
    }
    public function add(){
        dump ('adddd');
    }
}
