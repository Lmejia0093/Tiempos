<?php

namespace App\Http\Controllers\ingenieria;

use App\Http\Controllers\Controller;
use App\Models\ingenieria\OrdTalla;
use App\Models\ingenieria\Team;
use App\Models\ingenieria\Tiempo;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class tiemposController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }




function index(){
  //  $ordTallas = OrdTalla::where('ORD','like','ORD-2288682')->get();
 //   $cantidadTallas = OrdTalla::where('ORD','like','ORD-2288682')->sum('cantidad');
  //  $datos = Tiempo::where('ORD','like','ORD-2288682')->get();
  //  $teams = Team::all();
   return view('tiempoFormOrd');
}

function form_ord()
{
    return view('ingenieria.indexBuscar');
}

public function buscar_ord(Request $request)
{
      // input del formulario
    $query = $request->input('Ord');
   // \DB::connection('mysql_second')->
    // $prueba = Schema::connection('sqlsrv')->select( 'select top 3 * from dbo.BaseStyleColors');
    $prueba = DB::connection('sqlsrv')->select( 'select top 3 * from dbo.BaseStyleColors');

    // Realizar la búsqueda en tu modelo
    $resultados = Tiempo::where('ORD', 'like', 'ORD-' . $query)->get();
 
 // Verificar si la colección resultante está vacía
 if($resultados->isEmpty()) {
  return response()->json(['resultados' => $prueba], 200); 
    // Si está vacía, puedes devolver un mensaje de error o redirigir a una página de error
    $error = 'Ord no existe '.$query;


  // return view('ingenieria.indexBuscar',compact('error'));

}
 
  $ordTallas = OrdTalla::where('ORD','like',$resultados[0]['ORD'])->get();
  $cantidadTallas = OrdTalla::where('ORD','like',$resultados[0]['ORD'])->sum('cantidad');
  $datos = Tiempo::where('ORD','like',$resultados[0]['ORD'])->get();
  $teams = Team::all();
  $Localidades = explode(',', $resultados[0]['Location_Desc']);
  $Machines = explode(',', $resultados[0]['MachineNumb']);

return response()->json(['resultados' => $prueba], 200); 

// return view('ingenieria.index',compact('datos','teams','ordTallas','cantidadTallas','Localidades','Machines'));
}

function VerAsignado(){

    return view('ingenieria.tableEquiposAsignados');
}
/**   este pendiente para generar el pdf
public function generarPDF()
{
    // Creamos una instancia de Dompdf
    $dompdf = new Dompdf();

       // input del formulario
      // $query = $request->input('Ord');
      $query = 'ORD-2497819';


       // Realizar la búsqueda en tu modelo
       $resultados = Tiempo::where('ORD', 'like', 'ORD-' . $query)->get();
    
   
    
     $ordTallas = OrdTalla::where('ORD','like',$resultados[0]['ORD'])->get();
     $cantidadTallas = OrdTalla::where('ORD','like',$resultados[0]['ORD'])->sum('cantidad');
     $datos = Tiempo::where('ORD','like',$resultados[0]['ORD'])->get();
     $teams = Team::all();
     $Localidades = explode(',', $resultados[0]['Location_Desc']);
     $Machines = explode(',', $resultados[0]['MachineNumb']);

    // Renderizamos la vista en HTML
    $html = view('ingenieria.index',compact('datos','teams','ordTallas','cantidadTallas','Localidades','Machines'))->render();

    // Cargamos el HTML en Dompdf
    $dompdf->loadHtml($html);

    // Establecemos el tamaño y la orientación del papel
    $dompdf->setPaper('A4', 'portrait');

    // Renderizamos el PDF
    $dompdf->render();

    // Devolvemos el PDF como una descarga al navegador
    return $dompdf->stream('HojaEstandar.pdf');
}
*/



}
