<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Product;
use App\Models\Variation;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('products.index', array("products" => $products));
    }

    public function getProduct($id){
        $product = Product::where('id', $id)->first();
        $variations = Variation::where('product_id', $id)->get();
        if (empty($product)){
            return redirect()->route('home');
        }

        return view('products.product', array('product' => $product, 'variations' => $variations));
    }

    public function postProduct(Request $request){
        $validateData = $this->validate($request, [
            'name' => 'required',
            'reference' => 'required',
            'price' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->reference = $request->input('reference');
        $product->price = $request->input('price');

        $product->save();
        return redirect()->route('home')->with(array('message' => 'Producto registrado correctamente'));
    }

    public function saveProduct(){
        return view('products.saveProduct');
    }

    public function deleteProduct($id){
        $product = Product::where('id', $id)->delete();
        return redirect()->route('home')->with('status', 'Producto eliminado!');
    }

    public function updateProduct($id, Request $request){
        $product = Product::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'reference' => $request->input('reference'),
            'price' => $request->input('price')
        ));

        return redirect()->route('home')->with('status', 'Producto actualizado!');
    }

    public function updateProductId($id){
        $product = Product::where('id', $id)->first();
        return view('products.saveProduct',array(
            'product' => $product
        ));
    }

    
    public function getVariation($id){
        $variation = Variation::where('id', $id)->first();
        $product = Product::where('id', $variation->product_id)->get();
        if (empty($variation)){
            return redirect()->route('home');
        }

        return view('products.variation', array('variation' => $variation, 'product' => $product));
    }

    public function saveVariation($id){
        return view('products.saveVariation', array('product' => $id));
    }
    
    public function postVariation(Request $request){
    
        $validateData = $this->validate($request, [
            'reference' => 'required',
            'price' => 'required'
        ]);

        $variation = new Variation();
        $variation->product_id = $request->input('product_id');
        $variation->reference = $request->input('reference');
        $variation->price = $request->input('price');

        $variation->save();
        return redirect()->route('home')->with(array('message' => 'Variación registrada correctamente'));

    }
    
    public function deleteVariation($id){
        $variation = Variation::where('id', $id)->delete();
        return redirect()->route('home')->with('status', 'Variación eliminada!');
    }
    
    public function updateVariation($id, Request $request){
        $variation = Variation::where('id', $id)->update(array(
            'reference' => $request->input('reference'),
            'price' => $request->input('price')
        ));

        return redirect()->route('home')->with('status', 'Variacion actualizada!');
    }
    
    public function updateVariationId($id){
        $variation = Variation::where('id', $id)->first();
        return view('products.saveVariation',array(
            'variation' => $variation
        ));
    }
}
