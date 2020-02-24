<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class ApiController extends Controller
{


   public function __construct(Ciudad $ciudad)
   {    
        $this->ciudad = $ciudad;
   }

   public function mostrar($ciudad)
   {
       $ciudad = $this->ciudad->encuentraPorCiudad($ciudad);

       dd($ciudad);
       return view('vistaCiudad', compact('ciudad'));

   }

   public function dataExistsInDatabase(Re$ciudad){

   }


}
