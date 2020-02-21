<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Ciudad extends Model
{
    public function findByCiudad($ciudad)
    {
        $token = env('TOKEN');
        return $this->endpointRequest('/city/'.$ciudad.'&appid='.$token);
    }
}
