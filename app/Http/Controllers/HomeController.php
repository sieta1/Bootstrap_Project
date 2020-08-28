<?php

namespace App\Http\Controllers;

use App\Produits;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function merhaba() {
        //$users = DB::table('users')->get(); //users adli olan veritabanindan verileri ceker
        //dd($users);
        //veri cekme baska bir yontemi:
        //$users = User::all();
        $produits = Produits::with(['user'])->get();
        dd($produits);

        return view('merhaba', compact('users'));//->with(['users' => $users]); // cektigi verileri buraya yollar
    }

}
