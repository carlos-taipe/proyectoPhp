<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::orderBy('id','desc')->paginate();

        return view('productos.index',compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(StoreProducto $request){

        $producto = Producto::create(
            $request->all()
        );

        return redirect()->route('productos.show',$producto->id);
    }

    public function show(Producto $producto){
        return view('productos.show',compact('producto'));
    }

    public function edit(Producto $producto){
        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request, Producto $producto){
        
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $producto ->update($request->all());

        return redirect()->route('productos.show',$producto);
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
