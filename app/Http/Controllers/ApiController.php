<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CP;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class ApiController extends Controller
{
    public function pasarDatos(Request $request){
      
      return  $this->mostrar($request);
    }

   public function __construct(CP $ciudad)
   {    
        $this->ciudad = $ciudad;
   }

   public function mostrar($cp)
   {

    $cp=$cp->postal_code;
    $ciudad = $this->ciudad->encuentraPorCodigoPostal($cp);

    $this->dataExistsInDatabase($ciudad, $cp);
       //dd($ciudad);
       return view('vistaCiudad', compact(['ciudad', 'cp']));

   }

   public function dataExistsInDatabase($ciudad, $cp){
       $hoy=date('Y-m-d H:i:s');
    //TODO cambia el código postal no es por ciudad
       $ciudadInput=$ciudad->city->name;
       $temperatura=$ciudad->list[0]->main->temp;
       $queryCiudad = DB::select('select * from ciudades where ciudad = ?', [$ciudadInput]);

       if (empty($queryCiudad)) {
            DB::table('ciudades')->insert(
                ['ciudad' => $ciudadInput, 'temperatura'=> $temperatura, 'codigopostal'=>$cp, 'created_at'=>$hoy]
            );
       
        }else{
            DB::table('ciudades')
            ->where('ciudad', "=", $ciudadInput)
            ->update(['ciudad' => $ciudadInput, 'temperatura'=> $temperatura, 'codigopostal'=>$cp, 'updated_at'=>$hoy]);
        }
   }
}
