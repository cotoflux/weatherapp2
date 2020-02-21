<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class ApiController extends Controller
{


   public function __construct(Ciudad $ciudad)
   {    dd($ciudad);
        $this->ciudad = $ciudad;
   }

   public function findByCity($ciudad)
   {
       $ciudad = $this->ciudad->findById($ciudad);
       return view('vistaCiudad', compact('ciudad'));

   }


}
