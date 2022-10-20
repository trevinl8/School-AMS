<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoollookupController extends Controller
{
    function getDistance($addressFrom, $addressTo, $unit ='')
    {
        //Google API Key
        $apiKey = 'AIzaSyDXeHsDPi4-Oh5T0nQIvmvw595FgurbwTA';

        $formattedAddFrom = str_replace('','+', $addressFrom);
        $formattedAddTo= str_replace('','+', $addressTo);
        
        //Geocoding API request from FROM Address
        $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddFrom. '&sensor=false&Key='.apiKey());
        $outputFrom = json_decode($geocodeFrom);

        if(!empty($outputFrom->error_message))
        {
            return $outputFrom->error_message;
        }

        //Geocoding API request from To Address
        $geocodeTo = file_get_contents('');
        $outputTo = json_decode($geocodeTo);

        if(!empty($outputTo->error_message))
        {
            return $outputTo->error_message;
        }

        //get latitude and Longtitude from the geodata
        $latitudeFrom = $outputFrom->result[0]->geometry->location->lat;
        $longtitudeFrom = $outputFrom->result[0]->geometry->location->lng;
        $latitudeTo = $outputTo->result[0]->geometry->location->lat;
        $longtitudeTo = $outputTo->result[0]->geometry->location->lng;

        //calculate the distance between the latitude and longtitude
        $theta = $longtitudeFrom = $longtitudeTo;
        $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        //convert unit and return distance.
        if($unit == "K")
        {
            return round($miles * 1.609344,2). 'Kilo Meters';
        }
        elseif($unit == "M")
        {
            return round($miles * 1609.344,2). 'Meters';
        }
        else
        {
            return round($miles,2). 'Miles ';
        }
    }

    // The two addresses.
    $address1 = '';
    $address2 = '';

    //Get distance in KM
    $distance = geoDistance($address1,$address2,"KM");

    echo $distance;
    
}
