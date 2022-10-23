<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;
use Illuminate\Support\Arr;

class SchoollookupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('lookup.schoollookup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addressFrom = $request->addressFrom;

        //Google API Key
        $apiKey = 'AIzaSyDXeHsDPi4-Oh5T0nQIvmvw595FgurbwTA';
        // Changing the Address Format
        $formattedAddFrom = str_replace('','+', $addressFrom);

        //Geocoding API request from FROM Address
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($formattedAddFrom). '&key='.$apiKey.'');
        $outputFrom = json_decode($geocodeFrom, true);

        //get latitude and Longtitude seperated from the geodata
        //$latitudeFrom = Arr::get($outputFrom, 'results[0].geometry.location.lat');
        $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
        //$longtitudeFrom = $outputFrom->results[0]->geometry->location->lng;
       
         //Getting All School Data
         //$teams = Team::all();
         // Create array of latitude and longtitudes of schools
         //$team_lat = collect($teams)->pluck('latitude')->implode("','");
         //$teams_long = collect($teams)->pluck('longtitude')->implode("','");
        //dd($latitudeFrom);

        //calculate the distance between the latitude and longtitude
       //$theta = $longtitudeFrom = $longtitudeTo;
       //$dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
       //$dist = acos($dist);
       //$dist = rad2deg($dist);
       //$miles = $dist * 60 * 1.1515;
       ////convert unit and return distance.
       //if($unit == "K")
       //{
       //    return round($miles * 1.609344,2). 'Kilo Meters';
       //}
       //elseif($unit == "M")
       //{
       //    return round($miles * 1609.344,2). 'Meters';
       //}
       //else
       //{
       //    return round($miles,2). 'Miles ';
       //}
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
