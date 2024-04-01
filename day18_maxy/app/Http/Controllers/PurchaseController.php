<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Console\View\Components\Confirm;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public static function selectPurchase(){
        $purchases = Purchase::select('id','item', 'quantity', 'cost_total','date','cost_item')
                                   ->orderBy('date', 'desc')
                                   ->get();

        return $purchases;
    }

    public static function selectPurchaseById($id){
        $purchases = Purchase::select('id','item', 'quantity', 'cost_total','date','cost_item')
                                ->where('id',$id)
                                ->orderBy('date', 'desc')
                                ->get();

        return $purchases;
    }

    public function editPurchase(Request $request){
        // Validate data
        $rules = [
            'id' => 'required|integer',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'cost_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('purchase',[
                'mode' => 'edit',
                'error' => 'You failed to fill the form correctly!',
                'data' => PurchaseController::selectPurchaseById($request->input('id'))
            ]);
        }

        // Passed
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'cost_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        $validatedData['cost_total'] = $validatedData['quantity'] * $validatedData['cost_item'];

        $purchase = Purchase::find($validatedData['id']);
        $purchase->item = $validatedData['item'];
        $purchase->quantity = $validatedData['quantity'];
        $purchase->cost_item = $validatedData['cost_item'];
        $purchase->cost_total = $validatedData['cost_total'];
        $purchase->date = $validatedData['date'];
        $purchase->save();
        return view('purchase',[
            'mode' => 'edit',
            'success' => 'Successfully edited the log!',
            'data' => [$validatedData]
        ]);
    }

    public function insertPurchase(Request $request){
        // Validate data
        $rules = [
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'cost_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('purchase',[
                'mode' => 'insert',
                'error' => 'You failed to fill the form correctly!'
            ]);
        }

        // Passed
        $validatedData = $request->validate([
            'item' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'cost_item' => 'required|integer|min:1',
            'date' => 'required|date',
        ]);

        $validatedData['cost_total'] = $validatedData['quantity'] * $validatedData['cost_item'];

        Purchase::create($validatedData);
        return view('purchase',[
            'mode' => 'insert',
            'success' => 'Successfully inserted new log!',
        ]);
    }

    public static function deletePurchase($id){
        Purchase::destroy($id);
        return PurchaseController::selectPurchase();
    }

    public static function sumPurchase(){
        return Purchase::sum('cost_total');
    }
}
