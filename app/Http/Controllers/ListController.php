<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
