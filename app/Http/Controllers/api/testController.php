<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testController extends Controller{

    public function index(){
        $this->queryCURL();
    }

    private function queryCURL(){
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, 'http://localhost:8003/api/details');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "login=igor@mail.ru&password=123");

            $out = curl_exec($curl);
            echo $out;
            curl_close($curl);
        }
    }
}