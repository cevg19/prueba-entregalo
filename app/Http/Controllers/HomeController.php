<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use HTTP_Request2;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*  
         $res = Http::get('https://sandbox.entregalo.co/api/cities');
        $res = Http::withToken(config('DeTZn0S2y78PRlppnF0u48jl3viRUxul7dSsWA5WssexQykxq4s128r2jgqwKDO1SnZiQIpqrabHBiMM'))
        ->get('https://sandbox.entregalo.co/api/cities');
        $cities = $res->json(); */
        $request = new HTTP_Request2();
        $request->setUrl('https://sandbox.entregalo.co/api/cities');
        $request->setMethod(HTTP_Request2::METHOD_POST);
        $request->setConfig(array(
        'follow_redirects' => TRUE
            ));
            $request->setHeader(array(
            'Content-Type' => 'application/json',
            'token' => 'DeTZn0S2y78PRlppnF0u48jl3viRUxul7dSsWA5WssexQykxq4s128r2jgqwKDO1SnZiQIpqrabHBiMM'
            ));
            $request->setBody('{}');
            try {
            $response = $request->send();
            if ($response->getStatus() == 200) {
                $cities = json_decode($response->getBody());
                $citie = $cities->data->Ciudades;
                
                
            
            }
            else {
                echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                $response->getReasonPhrase();
            }
            }
            catch(HTTP_Request2_Exception $e) {
            echo 'Error: ' . $e->getMessage();
            }
        
        return view('home',compact('citie'));
    }

    public function store(Request $request){
            
    }

}
