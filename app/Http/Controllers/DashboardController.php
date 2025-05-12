<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Hal Utama
    public function index(){
        return view('welcome123');
    }

    //Bab 1
    public function bab1(){
        return view('pages.bab1.index');
    }
    public function latar(){
        return view('pages.bab1.latar');
    }
    public function rumusan(){
        return view('pages.bab1.rumusan');
    }
    public function tujuan(){
        return view('pages.bab1.tujuan');
    }
    public function batasan(){
        return view('pages.bab1.batasan');
    }
    public function sistematika(){
        return view('pages.bab1.sistematika');
    }
    
    //Bab 2
    public function bab2(){
        return view('pages.bab2.index');
    }
    public function pengembangan(){
        return view('pages.bab2.pengembangan');
    }
    public function mccall(){
        return view('pages.bab2.mccall');
    }
    public function penelitian(){
        return view('pages.bab2.penelitian');
    }

    //Bab 3
    public function bab3(){
        return view('pages.bab3.index');
    }
    public function evaluasi(){
        return view('pages.bab3.evaluasi');
    }
    public function metodologi(){
        return view('pages.bab3.metodologi');
    }


    //Bab 4
    public function bab4(){
        return view('pages.bab4.index');
    }
    public function mccalls(){
        return view('pages.bab4.mccalls');
    }
    public function backlog(){
        return view('pages.bab4.backlog');
    }
    public function planning(){
        return view('pages.bab4.planning');
    }
    public function uc(){
        return view('pages.bab4.uc');
    }
    public function act(){
        return view('pages.bab4.act');
    }
    public function seq(){
        return view('pages.bab4.seq');
    }
    public function class(){
        return view('pages.bab4.class');
    }
    public function erd(){
        return view('pages.bab4.erd');
    }
    public function kamus(){
        return view('pages.bab4.kamus');
    }
    public function pam(){
        return view('pages.bab4.pam');
    }

     //Bab 5
    public function bab5(){
        return view('pages.bab5.index');
    }
    public function imccalls(){
        return view('pages.bab5.imccalls');
    }
    public function sistem(){
        return view('pages.bab5.sistem');
    }
    public function blackbox(){
        return view('pages.bab5.blackbox');
    }
    public function uat(){
        return view('pages.bab5.uat');
    }


    //Bab 6
    public function bab6(){
        return view('pages.bab6.index');
    }
    public function kesimpulan(){
        return view('pages.bab6.kesimpulan');
    }
    public function saran(){
        return view('pages.bab6.saran');
    }
}
