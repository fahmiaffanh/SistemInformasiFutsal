<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    //
    public function itemlist(){
        return view("item.list");
    }
    public function itemform(){
        return view("item.form");
    }
    public function trandashboard(){
        return view("transaksi.dashboard");
    }
    public function juallist(){
        return view("transaksi.juallist");
    }
    public function jualform(){
        return view("transaksi.jualform");
    }
}
