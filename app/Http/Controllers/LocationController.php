<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    private $apiBaseUrl = 'https://emsifa.github.io/api-wilayah-indonesia/api';

    public function getProvinces()
    {
        $client = new Client();
        $response = $client->get($this->apiBaseUrl . '/provinces.json');
        $provinces = json_decode($response->getBody(), true);

        return response()->json($provinces);
    }

    public function getCities($province_id)
    {
        $client = new Client();
        $response = $client->get($this->apiBaseUrl . "/regencies/{$province_id}.json");
        $cities = json_decode($response->getBody(), true);

        return response()->json($cities);
    }

    public function getDistricts($city_id)
    {
        $client = new Client();
        $response = $client->get($this->apiBaseUrl . "/districts/{$city_id}.json");
        $districts = json_decode($response->getBody(), true);

        return response()->json($districts);
    }

    public function getVillages($district_id)
    {
        $client = new Client();
        $response = $client->get($this->apiBaseUrl . "/villages/{$district_id}.json");
        $villages = json_decode($response->getBody(), true);

        return response()->json($villages);
    }
}
