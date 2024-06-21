<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetAllReport extends Controller
{
    //
    public function getallreport(){
        $response = Http::get('https://capstone-sv67gbtaea-et.a.run.app/laporan/all');
        // dd($response);
         if ($response->successful()) {
            $data = $response->json();
            return view('home',['reports'=>$data['data']]);
         }else{
            return view('home')->with('error','data gagal di tampilkan');
         }
    }

    public function formedit(){
        return view('form-edit');
    }
}
