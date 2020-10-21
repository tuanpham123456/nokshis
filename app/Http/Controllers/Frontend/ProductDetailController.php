<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductDetailController extends FrontendController
{
    public function getProductDetail(Request $request,$slug){
        // tách mảng slug ra 
        $arraySlug  = explode('-',$slug);
        // lấy phần tử id cuối của mảng slug
        $id         = array_pop($arraySlug);
        // check id tồn tại
        if ($id){
            $product  = Product::findOrFail($id);
            $viewData =[
                'product'   => $product
            ];
            return view ('frontend.pages.product_detail.index',$viewData);

        }
        // ko có return về trang chủ
        return redirect()->to('/');
    }
}
