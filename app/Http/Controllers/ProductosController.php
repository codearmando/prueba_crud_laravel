<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductosRequest;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductosController extends Controller
{
    //
    public function index(){
        $producto = Productos::all();

        return view('productos.index', compact('producto'));
    }
    public function create() : View
    {
        return view('productos.create');
    }
    public function register(ProductosRequest $request): RedirectResponse //indicamos la validacion de datos con ProductosRequest que espera la funcion y el tipo de retorno que devuelve la funcion
    {
        Productos::create($request->all());

        // ------------------------------------
        // ------------------------------------
        // de la $request puedo obtener los nombres de cada uno de los campos sino coincide el nombre de los inputs
        // con los campos del modelo
        // Productos::create([
        //     'nombre' => $request->nombre,
        //     'descripcion' => $request->descripcion,
        //     'precio' => $request->precio,
        // ]);

        return redirect()->route('productos.index')->with('success','Producto Registrado Exitosamente'); //width:metodo para mostrar mensaje 
    }
    // indicamos que mediante el modelo Productos la funcion recibira un valor
    public function viewupdate (Productos $idproducto): View
     {
         // llamamos la vista y le pasamos el valor idproducto 
        return view('productos.update',compact('idproducto'));
     }
 
     // request: recibir datos de formulario y $id: parametro que se pasar por la ruta
     public function update(ProductosRequest $request, Productos $id) : RedirectResponse
     {
         // aplicamos el metodo update para el producto que hemos recibido
         $id->update($request->all());
         
         // $id->update([
         //     'nombre' => $request->nombre,
         //     'descripcion' => $request->descripcion,
         //     'precio' => $request->precio,
         // ]);
 
 
        return redirect()->route('productos.index')->with('success','Producto Modificado Exitosamente'); //width:metodo para mostrar mensaje 
     }
     public function viewshow(Productos $id): View
     {
         return view('productos.showview',compact('id'));
     }
     public function delete(Productos $idproducto): RedirectResponse
     {
         $idproducto->delete();
         return redirect()->route('productos.index')->with('destroy','Producto Eliminada Permanente'); //width:metodo para mostrar mensaje 
     }
 
}
