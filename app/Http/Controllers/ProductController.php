<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function index(Request $request){
        $name = $request->name;
        
        $produtos = DB::table('products')->get();
        return view('product.index',compact('produtos','name'));
    }

    public function search(Request $request){
        $produtos = DB::table('products');

        $name = $request->name;

        if( $request->name){
            $produtos = $produtos->where('name', "$request->name");
        }
        $produtos = $produtos->get();
        return view('product.index',compact('produtos','name'));
    }
    public function create(Request $request)
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data = [
            'name' =>$request->name,
			'description' =>$request->description,
			'price' =>$request->price,
			'details' =>$request->details,
			'slug' =>$request->slug,
            'shipping_cost'=>15.90,
            'category_id' => 2,
            'brand_id' => 3,
            'user_id' => 1,
            'image_path' => 'jordan1.png',
        ];
        DB::table('products')->insert($data);
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $produtos = DB::table('products')->where('id',$id)->first();
        return view('product.edit', compact('produtos'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' =>$request->name,
			'description' =>$request->description,
			'price' =>$request->price,
			'details' =>$request->details,
			'slug' =>$request->slug,
            'shipping_cost'=>15.90,
            'category_id' => 2,
            'brand_id' => 3,
            'user_id' => 1,
            'image_path' => 'jordan1.png',
        ];
        DB::table('products')->where('id', $id)->update($data);
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        
        DB::table('products')->where('id',$id)->delete($id);
        return redirect()->route('product.index');
        
    }
}
