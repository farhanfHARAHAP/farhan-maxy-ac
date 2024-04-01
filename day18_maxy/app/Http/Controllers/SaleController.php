<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Support\Facades\Validator;

class SaleController extends Controller
{
    public static function selectSale(){
        $sales = Sale::select('id','item', 'quantity', 'price_total','date','price_item')
                                   ->orderBy('date', 'desc')
                                   ->get();

        return $sales;
    }

    public static function selectSaleById($id){
        $sales = Sale::select('id','item', 'quantity', 'price_total','date','price_item')
                                ->where('id',$id)
                                ->orderBy('date', 'desc')
                                ->get();

        return $sales;
    }

    public function editSale(Request $request){
        // Validate data
        $rules = [
            'id' => 'required|integer',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('sale',[
                'mode' => 'edit',
                'error' => 'You failed to fill the form correctly!',
                'data' => SaleController::selectSaleById($request->input('id'))
            ]);
        }

        // Passed
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        $validatedData['price_total'] = $validatedData['quantity'] * $validatedData['price_item'];

        $sale = Sale::find($validatedData['id']);
        $sale->item = $validatedData['item'];
        $sale->quantity = $validatedData['quantity'];
        $sale->price_item = $validatedData['price_item'];
        $sale->price_total = $validatedData['price_total'];
        $sale->date = $validatedData['date'];
        $sale->save();
        return view('sale',[
            'mode' => 'edit',
            'success' => 'Successfully edited the log!',
            'data' => [$validatedData]
        ]);
    }

    public function insertSale(Request $request){
        // Validate data
        $rules = [
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('sale',[
                'mode' => 'insert',
                'error' => 'You failed to fill the form correctly!'
            ]);
        }

        // Passed
        $validatedData = $request->validate([
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        $validatedData['price_total'] = $validatedData['quantity'] * $validatedData['price_item'];

        Sale::create($validatedData);
        return view('sale',[
            'mode' => 'insert',
            'success' => 'Successfully inserted new log!',
        ]);
    }

    public static function deleteSale($id){
        Sale::destroy($id);
        return SaleController::selectSale();
    }

    public static function sumSale(){
        return Sale::sum('price_total');
    }
}
