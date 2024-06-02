<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Codificacion;
use App\Models\Descuento;
use App\Models\Registro;
use App\Http\Controllers\RedsysController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 
        return view('home');
    }
    public function principal2()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',1);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',1);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',1);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',1);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',1);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();
         return view('principal2',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }
    public function principal3()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',2);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',2);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',2);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',2);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',2);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();

        return view('principal3',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }

    public function movistar()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',3);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',3);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',3);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',3);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',3);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();

        return view('movistar',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }
    public function vodafone()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',4);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',4);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',4);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',4);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',4);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();

        return view('vodafone',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }
    public function orange()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',5);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',5);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',5);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',5);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',5);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();

        return view('orange',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }
    public function jazztel()
    {
        $productosnet = Producto::all()->where('id_tipo',1)->where('id_marca',6);
        $productosconvergente = Producto::all()->where('id_tipo',2)->where('id_marca',6);
        $productostv = Producto::all()->where('id_tipo',3)->where('id_marca',6);
        $productosadicionales = Producto::all()->where('id_tipo',4)->where('id_marca',6);
        $productosmoviles = Producto::all()->where('id_tipo',5)->where('id_marca',6);
        $descuentos = Descuento::all();
        $codificaciones = Codificacion::all();

        return view('jazztel',compact('descuentos','productosnet','productosconvergente','productostv','productosadicionales','productosmoviles','codificaciones'));
    }

    public function yoigo(Request $request)
    {
        Registro::create($request->all());

        if ($request->id_codificacion=="1"){


        $name= $request->DNI;
        $total= $request->pvp;
        $description=$request->codificacion;
        $redsys= new RedsysController;

        $redsys->index($name, $total, false, $description);
        }else{
            return redirect()->route('principal2')
            ->with('success', 'Registro created successfully.');
       }
    }
       public function masmovil(Request $request)
       {
        Registro::create($request->all());
        
        if ($request->id_codificacion=="1"){

        $name= $request->DNI;
        $total= $request->pvp;
        $description=$request->codificacion;
        $redsys= new RedsysController;

        $redsys->index($name, $total, false, $description);
        }else{
            return redirect()->route('principal3')
            ->with('success', 'Registro created successfully.');
          }
   
        }
        public function movistarpago(Request $request)
        {
         Registro::create($request->all());
         
         if ($request->id_codificacion=="1"){
 
         $name= $request->DNI;
         $total= $request->pvp;
         $description=$request->codificacion;
         $redsys= new RedsysController;
 
         $redsys->index($name, $total, false, $description);
         }else{
             return redirect()->route('movistar')
             ->with('success', 'Registro created successfully.');
           }
    
         }
         public function vodafonepago(Request $request)
         {
          Registro::create($request->all());
          
          if ($request->id_codificacion=="1"){
  
          $name= $request->DNI;
          $total= $request->pvp;
          $description=$request->codificacion;
          $redsys= new RedsysController;
  
          $redsys->index($name, $total, false, $description);
          }else{
              return redirect()->route('vodafone')
              ->with('success', 'Registro created successfully.');
            }
     
          }
          public function orangepago(Request $request)
          {
           Registro::create($request->all());
           
           if ($request->id_codificacion=="1"){
   
           $name= $request->DNI;
           $total= $request->pvp;
           $description=$request->codificacion;
           $redsys= new RedsysController;
   
           $redsys->index($name, $total, false, $description);
           }else{
               return redirect()->route('orange')
               ->with('success', 'Registro created successfully.');
             }
      
           }
           public function jazztelpago(Request $request)
           {
            Registro::create($request->all());
            
            if ($request->id_codificacion=="1"){
    
            $name= $request->DNI;
            $total= $request->pvp;
            $description=$request->codificacion;
            $redsys= new RedsysController;
    
            $redsys->index($name, $total, false, $description);
            }else{
                return redirect()->route('jazztel')
                ->with('success', 'Registro created successfully.');
              }
       
            }
          
}

