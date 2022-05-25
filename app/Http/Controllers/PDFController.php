<?php
  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Equipo;
  
class PDFController extends Controller
{

    public function pdfEquipos() {

        $equipos = Equipo::join('marcas','equipos.marca_id','marcas.id')
        ->join('categorias','equipos.categoria_id','categorias.id')
        ->select(
            'equipos.id',
            'equipos.codigo',
            'equipos.nombre',
            'equipos.descripcion',
            'categorias.nombre as categoria',
            'marcas.nombre as marca',
            'equipos.estado'
        )
        ->orderBy('equipos.id','DESC')->get();
          
        $pdf = \PDF::loadView('admin.listEquiposPDF',compact('equipos'));
        return $pdf->stream('equipos.pdf');
    }
}