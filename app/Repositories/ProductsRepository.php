<?php
namespace App\Repositories;

use App\Models\PackagingType;
use App\Models\ProductDetail;
use App\Models\ProductPackaging;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsRepository{

    public function __construct(){

    }

    //Get all products
    public function get($request){


        $query = ProductDetail::orderBy('id','desc')->with("packagings","type","member");
        $row_count  = ($request->rows)?$request->rows:20;

        if($request->from_date)
        $query->where(DB::raw('DATE(created_at)'),'>=',$request->from_date);

        if($request->to_date)
        $query->where(DB::raw('DATE(created_at)'),'<=',$request->to_date);

        if($request->type_id)
        $query->where('product_type_id',$request->type_id);

        if($request->packaging)
        $query->where('product_packaging_id',$request->packaging);

        if($request->unbs)
        $query->where('is_unbs_certified',$request->unbs);

        if($request->ursb)
        $query->where('is_registered_brand',$request->ursb);
      
        if($request->excel_export)
          $this->excel_export($query);
        
        $records = $query->paginate($row_count);
        return $records;
    }

    private function excel_export($results){

        $export_file = 'product-list-'.time().'.xls';
        $export_data = [];

        $results->chunk(100, function($rows) use(&$export_data) {

            foreach ($rows as $row){

                $packing = "";
                foreach($row->packagings as $pack):
                 $packing = $pack->type->packaging_type_name."";
                endforeach;

               $data_row = [
                   "PRODUCT NAME"      => $row->product_name,
                   "TYPE"              => $row->type->type_name,
                   "PACKAGING"         => $packing,
                   "URSB"              => ($row->is_registered_brand)?'Registered':'Not Registered',
                   "UNBS"              => ($row->is_unbs_certified)?'Certified':'Not Certified',
                   "RECYLABLE PACKAGING" => ($row->recycles_packagin)?'Recyclable':'Not Recyclable',
                   'MEMBER'=> $row->member->first_name." ".$row->member->first_name
               ];

               array_push($export_data,$data_row);
            }

        });

       set_time_limit(0);

        $filename =  $export_file;      
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

       export_excel($export_data);
    }

    public function get_types(){

        $types = ProductType::paginate(15);
        return $types;
    }

    public function get_packaging_types(){

        $types = PackagingType::paginate(15);
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

    public function save_packaging_type(Request $request){

        $packaging = new PackagingType();

        $packaging->packaging_type_name = $request->packaging_type;
        $packaging->packaging_type_desc = $request->description;

        return $packaging->save();
    }

    public function save_category(Request $request){

        $category = new ProductType();

        $category->type_name = $request->category_name;
        $category->desc_name = $request->description;

        return $category->save();
    }



}