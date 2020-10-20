<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Carbon\Carbon;
use Illuminate\Support\Str;

use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function index(){
        $products   = Product::paginate(10);

        return view ('admin.product.index',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view ('admin.product.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->except('_token','pro_avatar');
        $data['pro_slug']     = Str::slug($request->pro_name);
        $data['created_at']   = Carbon::now();
        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }

        $id = Product::insertGetId($data);

        return redirect()->back();
    }
    public function edit($id) 
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.update', compact('categories','product'));
    }

    public function update(Request $request, $id)
    {
        $product           = Product::find($id);
        $data               = $request->except('_token','pro_avatar');
        $data['pro_slug']     = Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now(); 
        
        if ($request->pro_avatar) {
            $image = upload_image('pro_avatar');
            if ($image['code'] == 1)
                $data['pro_avatar'] = $image['name'];
        }
        $product->update($data);
        return redirect()->back();
    }
    public function delete($id){
        $product    = Product::find($id);
        if ($product) $product->delete();
        return redirect()->back();
    }

    // -----------
    public function hot($id)
    {
        $product = Product::find($id);
        $product->pro_hot = ! $product->pro_hot;
        $product->save();

        return redirect()->back();
    }
    public function active($id)
    {
        $product = Product::find($id);
        $product->pro_active = ! $product->pro_active;
        $product->save();

        return redirect()->back();
    }
    
}
