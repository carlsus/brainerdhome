<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\Models\Seller\Market;


class APITestController extends Controller
{
    public function index()
    {
        
        $id = 'ME'; // ID or abbreviation of the state.
        $client = new Client;
        $request = $client->request('GET','http://slipstream-test.homejunction.com/ws/areas/states/get',[
            'headers' => [
                'HJI-Slipstream-Token' => 'HJI-E3C18D4E-01E0-4628-A740-E83A977A9847',
            ],
            'query' => [
                'id' => $id,
                'details' => true,
            ]
        ]);
        
        // Fetch specific data.
        $state = json_decode($request->getBody()->getContents(), true);
        //dd($state);
        $lat = $state['result']['states'][0]['id'];
        return $lat;
    }

    public function getMarkets()
    {
        $markets = Market::getMarkets('AZ');
        return view('apitest', compact('markets'));
    }

    public function call()
    {
        $id = 'AZ'; // ID or abbreviation of the state.
        $client = new Client;
        $request = $client->request('GET','http://slipstream-test.homejunction.com/ws/areas/states/get',[
            'headers' => [
                'HJI-Slipstream-Token' => 'HJI-E3C18D4E-01E0-4628-A740-E83A977A9847',
            ],
            'query' => [
                'id' => $id,
                'details' => true,
            ]
        ]);
        
        $state = json_decode($request->getBody()->getContents(), true);
        // Get the coords
        $coords = $state['result']['states'][0]['centroid']['latitude'] . ',' . $state['result']['states'][0]['centroid']['longitude'];

        // Get Markets
        $request = $client->request('GET','http://slipstream-test.homejunction.com/ws/markets/search',[
            'headers' => [
                'HJI-Slipstream-Token' => 'HJI-3CFC250E-BFE5-46F4-A750-F77180DAA981',
            ],
            'query' => [
                'coords' => $coords,
            ]
        ]);
        $markets = json_decode($request->getBody()->getContents(), true)['result']['markets'];
        return view('apitest', compact('markets'));
    }
}
