<?php
namespace App\Repositories;

use App\Models\PackagingType;
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

    public function get_types(){

        $types = ProductType::all();
        return $types;
    }

    public function get_packaging_types(){

        $types = PackagingType::all();
        return $types;
    }
   

     //Find a single product
    public function find($id){

        $product = ProductDetail::find($id);
        return $product;
    }

    //saves product

    public function save(Request $request){

        $product = new ProductDetail();

        $product->product_name           = $request->product_name;
        $product->product_type_id        = $request->prod_type_id;
        $product->is_registered_brand    = $request->brand_registered;
        $product->member_id              = $request->member_id;
        $product->is_unbs_certified      = $request->unbs_certified;
        //$product->eco_packaging_trained  = $request->eco_trained;
        $product->recycles_packagin      = $request->recyclable;
        $product->packaging_type         = $request->packaging_type;

        return $product->save();
    }


}