<?php
namespace App\Repositories;
use App\Models\ProductDetail;
use App\Models\ProductPackaging;
use App\Models\ProductType;
use Illuminate\Http\Request;
class ProductsRepository{

    public function __construct(){

    }

    //Get all products
    public function get(){

        $products = ProductDetail::all();
        return $products;
    }

     //Find a single product
    public function find($id){

        $product = ProductDetail::find($id);
        return $product;
    }

    //saves product

    public function save(Request $request){

        $product = new ProductDetail();

        $product->inst_name     = $request->name;
        $product->inst_email    = $request->email;
        $product->inst_tel      = $request->tel;
        $product->inst_address  = $request->address;
        $product->product_type_id  = $request->type;

        return $product->save();
    }




}