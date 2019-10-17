<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\Color;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

    public function index()
    {

        $products = products::all();
       
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $context= array(
        //     $colors => Color::all(),
        // );
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required'],
            'type' => ['required'],
            'company' => ['required'],
            'model' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'image' => ['required','url'],
            'video_url' => ['url','nullable'],
        ]);
        
        $product = new products;
        $product->product_name = $request->input('name');
        $product->product_type = (int)$request->input('type');
        $product->company = $request->input('company');
        $product->Model = $request->input('model');
        $product->Launch_date = $request->input('Launch_date');
        $product->price =(float) $request->input('price');
        $product->description=$request->input('description');
        $product->image = $request->input('image');
        $product->video_url = $request->input('video_url');

            $product->save();
        return redirect('/products/create')->with('success',"Data is successfully saved");
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::find($id);
        
        //Check if post exists before deleting
        if (!isset($product)){
            return redirect('/products')->with('error', 'No product Found');
        }
        return view('products.edit')->with('product', $product);

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
        $this->validate($request, [
            'name' => ['required'],
            'type' => ['required'],
            'company' => ['required'],
            'model' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'image' => ['required','url'],
            'video_url' => ['url','nullable'],
        ]);
        
        $product = products::find($id);
        $product->product_name = $request->input('name');
        $product->product_type = (int)$request->input('type');
        $product->company = $request->input('company');
        $product->Model = $request->input('model');
        $product->Launch_date = $request->input('Launch_date');
        $product->price =(float) $request->input('price');
        $product->description=$request->input('description');
        $product->image = $request->input('image');
        $product->video_url = $request->input('video_url');

            $product->save();
        return redirect('/products')->with('success',"Data is successfully updated");
        }
      
    public function buynow($id){
        $product = products::find($id);
        
        //Check if post exists before deleting
        
        return view('products.buynow')->with('product', $product);

    

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

    public function allproducts()
    {
        $products = products::all();
       
        return view('products.index')->with('products',$products);
        
    }

}
