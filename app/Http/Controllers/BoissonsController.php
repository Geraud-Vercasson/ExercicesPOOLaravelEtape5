<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoissonsController extends Controller
{
    public function show(){
        $boissons = DB::select('select name, id from boissons');
        
        return view('boissons.liste', compact('boissons'));
    }
    
    public function details($id){
        $boisson = DB::select('select * from boissons where id = ?', [$id])[0];
        
        return view('boissons.details', compact('boisson'));
    }
}
