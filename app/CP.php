<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class CP extends Model
{

    protected $fillable = ['ciudad', 'codigopostal','temperatura'];
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function encuentraPorCodigoPostal($cp)
    {
        $token = env('TOKEN');
        return $this->endpointRequest('forecast?zip='.$cp.',es&units=metric&appid='.$token);
    }

    public function endpointRequest($url)
    {
                
        try{
            $response = $this->client->request('GET', $url);           
        } catch (\Exception $e){
            dd("No he podidod conectarme");
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
