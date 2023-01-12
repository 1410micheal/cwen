<?php

namespace App\Http\Livewire;

use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;
use Livewire\Component;

class Products extends Component
{
   
    public function categories(Request $request,ProductsRepository $productsRepos)
    {
        
        $data['heading'] = "Product Categories";
        $data['categories'] = $productsRepos->get_types();
        return view('products.categories')->with($data);
    }

    public function packagings(Request $request,ProductsRepository $productsRepos)
    {
        $data['heading'] = "Packaging Types";
        $data['packagings'] = $productsRepos->get_packaging_types();

        return view('products.packagings')->with($data);
    }

    public function save_packaging(Request $request,ProductsRepository $productsRepos){

        $member = $productsRepos->save_packaging_type($request);

        $msg = (!$member)?"Operation failed, try again":"Packaging Type saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }


    public function save_category(Request $request,ProductsRepository $productsRepos){

        $member = $productsRepos->save_category($request);

        $msg = (!$member)?"Operation failed, try again":"Category saved successfuly";
        $data["message"] = $msg;
       
        $alert_class = ($member)?'success':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return back()->with($alert);
    }
}
