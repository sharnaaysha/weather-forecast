<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use \Datetime;

class HomeController extends Controller
{


    public function index(){
         return view('home');
        }

    public function process(Request $request){
        $search = $request->input('cityId');
        
        $apiKey = "75cb02f053ebd23bb94d2d964a661594";
        $cityId = $search;
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=".$cityId.",japan&units=metric&APPID=75cb02f053ebd23bb94d2d964a661594";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response);
        $currentTime=time(); 
       return view('result', compact('data','search','currentTime'));
      
}
}