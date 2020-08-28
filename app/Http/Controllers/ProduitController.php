<?php

namespace App\Http\Controllers;

use App\Produits;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
    public function produits(){
        $produits = Produits::with(['user'])->get();
        return view('produits', compact('produits'));
    }
}
