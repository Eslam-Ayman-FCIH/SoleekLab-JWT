<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Create a new AreaController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('api', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function countries()
    {
        $response = \Unirest\Request::get("https://restcountries-v1.p.mashape.com/all",
          array(
            "X-Mashape-Key" => "4GRMGKSqI0mshyvKAWNT4E4yL9vJp10o20zjsn79lFOhWBhqRo",
            "Accept" => "application/json"
          )
        );
        $countries = array();
        foreach ($response->body as $key => $value) {
            array_push($countries, ['name'=>$value->name , 'area'=>$value->area . " KM"]);
        }
    	return response()->json($countries);
        
        
        /*$json = file_get_contents('http://country.io/names.json');
        $json = json_decode($json, true);
        return response()->json($json);*/
    }
}
