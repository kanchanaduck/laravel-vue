<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
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
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $student = Product::create($request->all());

        return response()->json([
            'message' => 'Great success! New task created',
            'Product' => $student
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* if (Product::where('id', $id)->exists()) {
            $student = Product::where('id', $id)->get();
            return response()->json($student);
        } 
        else {
            return response()->json([
              "message" => "Product not found"
            ], 404);
        } */
        $product = Product::findOrFail($id);
        return response()->json($product);
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
        /* $request->validate([
            'title' => 'nullable',
            'body' => 'nullable'
         ]);
 
         $student->update($request->all());
 
         return response()->json([
             'message' => 'Great success! Task updated',
             'Product' => $student
         ]); */
         DB::enableQueryLog();
         if (Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->title = is_null($request->title ) ? $student->title  : $request->title;
            $product->body = is_null($request->body) ? $student->body : $request->body;
            $product->save();
    
            return response()->json([
                "message" => "records updated successfully",
                "data" => DB::getQueryLog(),
            ], 200);
            } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 204);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
    }
}
