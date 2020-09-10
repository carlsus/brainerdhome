<?php

namespace App\Models\Seller;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Market extends Model
{
    protected $fillable = ['id', 'name'];
    public $incrementing = false;

    public static function getMarkets($state)
    {
        $client = new Client;
        $request = $client->request('GET','http://slipstream-test.homejunction.com/ws/areas/states/get',[
            'headers' => [
                'HJI-Slipstream-Token' => 'HJI-3CFC250E-BFE5-46F4-A750-F77180DAA981',
            ],
            'query' => [
                'id' => $state,
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
        return self::hydrate(json_decode($request->getBody()->getContents(), true)['result']['markets']);
    }
}
