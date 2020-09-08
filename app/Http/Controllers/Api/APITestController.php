<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class APITestController extends Controller
{
    public function index()
    {
        
        $id = 'ME'; // ID or abbreviation of the state.
        $client = new Client;
        $request = $client->request('GET','http://slipstream-test.homejunction.com/ws/areas/states/get',[
            'headers' => [
                'HJI-Slipstream-Token' => 'HJI-0CFFB569-8FC2-4EC6-8B9C-6298C70301AD',
            ],
            'query' => [
                'id' => $id,
                'details' => true,
            ]
        ]);
        
        // Fetch specific data.
        $state = json_decode($request->getBody()->getContents(), true);
        return $state['result']['states'][0]['id'];
    }

    public function getListings()
    {

    }
}
