<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public static function selectProduct(){
        $data = Product::select('id','name','quantity','price')->get();
        return $data;
    }

    public static function selectProductById($id){
        $data = Product::select('id','name','quantity','price')
            ->where('id',$id)
            ->get();
        return $data;
    }

    public function insertProduct(Request $request){
        $rules = [
            'name'=>'required|string',
            'quantity'=>'required|integer',
            'price'=>'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return view('product',[
                'mode'=>'add',
                'error'=>'You failed to input the form correctly!'
            ]);
        }
        $input = $request->validate($rules);
        Product::create($input);
        return view('product',[
            'mode'=>'add',
            'success'=>'New product has been registered!'
        ]);
    }

    public function editProduct(Request $request){
        $rules = [
            'id'=>'required|integer',
            'name'=>'required|string',
            'quantity'=>'required|integer',
            'price'=>'required|integer'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return view('product',[
                'mode'=>'edit',
                'error'=>'You failed to input the form correctly!',
                'data'=>[$request->all()]
            ]);
        }
        $input = $request->validate($rules);
        $edit = Product::find($input['id']);
        $edit->name = $input['name'];
        $edit->quantity = $input['quantity'];
        $edit->price = $input['price'];
        $edit->save();
        return view('product',[
            'mode'=>'edit',
            'success'=>'Product has been edited successfully!',
            'data'=>[$request->validate($rules)]
        ]);
    }

    public static function deleteProduct($id){
        Product::destroy($id);
    }
}
