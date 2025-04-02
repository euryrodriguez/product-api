<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
        /**
     * @SWG\Get(
     *     path="/Productos",
     *     summary="Obten una lista de productos",
     *     tags={"Products"},
     *     @SWG\Response(response=200, description="Successful operation"),
     *     @SWG\Response(response=400, description="Invalid request")
     * )
     */
    public function products(){
        return Product::where('deleted_at', null)->get();
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'currency_id' => 'required',
            'tax_cost' => 'required',
            'manufacturing_cost' => 'required',
           ]);
       
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->currency_id = $request->currency_id;
            $product->tax_cost = $request->tax_cost;
            $product->manufacturing_cost = $request->manufacturing_cost;
            
            if ($product->save()) {
                return response(
                    [
                        'message' => 'Producto guardado correctamente',
                        'product' => $product,
                        'status' => 200
                    ]
                );
            } else {
                return response(
                    [
                        'message' => 'error',
                        'product' => 'Error al guardar el producto!',
                        'status' => 404
                    ]
                );
            }
    }

    public function productById($id){
        $product = Product::find($id);
        return response()->json(array('product' => $product));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'currency_id' => 'required',
            'tax_cost' => 'required',
            'manufacturing_cost' => 'required',
           ]);
       
            $product = Product::find($id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->currency_id = $request->currency_id;
            $product->tax_cost = $request->tax_cost;
            $product->manufacturing_cost = $request->manufacturing_cost;
            
            if ($product->save()) {
                return response(
                    [
                        'message' => 'Cambios guardados correctamente',
                        'product' => $product,
                        'status' => 200
                    ]
                );
            } else {
                return response(
                    [
                        'message' => 'error',
                        'product' => 'Error al guardar los cambios!',
                        'status' => 404
                    ]
                );
            }
    }

    public function destroy($id)
    {
        $Producto = Producto::find($id);

        if ($Producto->delete()) {
            echo json_encode(array('result' => 1, 'producto eliminado correctamente!'));
        } else {
            echo json_encode(array('result' => 0, 'El producto no pudo ser eliminado'));
        }
    }

}
