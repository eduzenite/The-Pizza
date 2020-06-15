<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseProduct;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $purchases = Purchase::paginate(12);
//        $purchases = Purchase::paginate(12);
        return view('purchases', ['purchases' => $purchases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $purchase = new Purchase;
        $purchase->comments = $request->comments;
        $purchase->save();

        foreach ($request->products as $json){
            $product = json_decode($json);
            $purchase_products = new PurchaseProduct();
            $purchase_products->product_id = $product->id;
            $purchase_products->purchase_id = $purchase->id;
            $purchase_products->price = $product->price;
            $purchase_products->quantity = $product->quantity;
            $purchase_products->save();
        }

        return view('thanks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $purchase = Purchase::has('purchase_products')->find($id);
        $products = PurchaseProduct::where('purchase_id', $id)
            ->leftJoin('products', 'purchase_products.product_id', 'products.id')
        ->select('purchase_products.*', 'products.name')->get();
        return view('purchase', ['purchase' => $purchase, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
