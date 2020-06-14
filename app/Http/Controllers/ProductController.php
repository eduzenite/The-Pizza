<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(Request $request)
    {
        $products = Product::inRandomOrder()->has('photos')
            ->leftJoin('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.slug as category_name')
            ->paginate(6);



        return view('index', ['products' => $products]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $category = Category::where('name', $request->route('category'))->first();
        $products = Product::where(function ($query) use ($category, $request) {
            if (!empty($category->id)) {
                $query->where('category_id', $category->id);
            }
            if (!empty($request->q)) {
                $query->where('products.name', 'like', '%'.$request->q.'%');
            }
        })
            ->has('photos')
            ->leftJoin('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.slug as category_name')
            ->paginate(12);

        return view('products', ['products' => $products, 'category' => $category, 'request' => $request]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($category, $id)
    {
        $product = Product::
        leftJoin('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.name as category_name', 'categories.id as cat_id',
                'categories.slug as category_slug')
            ->find($id);
        $photos = $product->photos;
        $other_products = Product::where('category_id', '<>', $product->cat_id)
            ->leftJoin('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.slug as category_slug')
            ->paginate(3);

        return view('product',
            ['product' => $product, 'photos' => $photos, 'category' => $category, 'other_products' => $other_products]);
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
