<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return response()->json(['status' => 'success', 'data' => $products]);
    }

    public function store(Request $request)
    {
        //
        try {
            $products = Product::create($request->all());
            return response()->json(['status' => 'success', 'message' => 'Producto creado correctamente', 'data' => $products]);
           
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try{


            $products = Product::find($id);
            if($products){
                return response()->json(['status' => 'success', 'data' => $products]);
            }
            else{
                return response()->json(['status' => 'error', 'message' => 'Producto no encontrado']);
            }
        }
       
        catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
