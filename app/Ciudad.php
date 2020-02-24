<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Ciudad extends Model
{

    protected $fillable = ['ciudad', 'codigopostal','temperatura'];
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function encuentraPorCiudad($ciudad)
    {
        $token = env('TOKEN');
        return $this->endpointRequest('forecast?q='.$ciudad.'&appid='.$token);
    }

    public function endpointRequest($url)
    {
        
        try{
            $response = $this->client->request('GET', $url);
            
        } catch (\Exception $e){
            return[];
        }
        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {
        if($response){
            return json_decode($response);
        }
        return[];
    }
}
