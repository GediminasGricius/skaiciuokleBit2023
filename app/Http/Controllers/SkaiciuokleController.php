<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
    public function forma(){

        return view("skaiciuokle");
    }

    public function rezultatas(Request $request){
        $kaina=$request->kaina;
        $kainaSuPVM=$kaina*1.21;
        $pvm=$kaina*0.21;

        return view("rezultatas",[
            'kaina'=>$kaina,
            'kainaSuPVM'=>$kainaSuPVM,
            'pvm'=>$pvm
        ]);
    }
}
