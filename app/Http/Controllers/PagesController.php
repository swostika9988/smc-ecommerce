<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        
        $products = Product::latest() ->limit(4)->get();
        return view('welcome',compact('products'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function viewproduct($id)
    {
        $product = Product::find($id);
        $relatedproducts = Product::where('category_id',$product->category_id)->where('id','!=',$id)->limit(4)->get();
        return view('viewproduct',compact('product','relatedproducts'));

    }
    public function categoryproduct($catid)
    {
        $category = Category::find($catid);
        $products = Product::where('category_id',$catid)->paginate(16);
        return view('categoryproduct',compact('products','category'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')->get();
        return view('search',compact('products','search'));
    }
    

}
