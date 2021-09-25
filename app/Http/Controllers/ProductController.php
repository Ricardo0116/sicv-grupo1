<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('products.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = Producto::create([
            'nombre' => $request->input('nombre'),
            'gramos' => $request->input('gramos'),
            'precio' => $request->input('precio'),
            'idvendores' => $request->input('idvendores'),
        ]);
        return redirect('productos')->with('crear', 'SE HA CREADO EL PRODUCTO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idproductos)
    {
        $productos = Producto::find($idproductos);
        return view ('products.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idproductos)
    {
        $productos = Producto::find($idproductos);
        return view('products.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproductos)
    {
        $productos = Producto::find($idproductos)->update([
            'nombre' => $request->input('nombre'),
            'gramos' => $request->input('gramos'),
            'precio' => $request->input('precio'),
            'idvendores' => $request->input('idvendores'),
        ]); return redirect('productos')->with('producto', 'SE HA ACTUALIZADO EL PRODUCTO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproductos)
    {
        $productos = Producto::find($idproductos)->delete();
        return redirect('productos')->with('eleminar', 'SE HA ELEMINADO EL PRODUCTO');
    }
}
