<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin()
    {
        $daftar = crud::all();
        return view('Admin.admin')->with('daftar',$daftar);
    }

    public function index()
    {
      
         $datas = crud::all();
         return view('tambah')->with('datas',$datas);
    }

    public function detail(){
        return view('show');
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
        /*$this->validate($request,[
        'name' => 'required',
        'email'=>'required',
        'deal' =>'required'
        ]);

        $tambah = new crud();
        $tambah->nama = $request['name'];
        $tambah->email= $request['email'];
        $tambah->deal=$request['deal'];
        $tambah->save();*/

        $product = crud::create($request->input());/*
        return response()->json($product);*/
        return view('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampilkan = crud::find($id);//
        return view('/home')->with('tampilkan',$tampilkan);
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
       /* $update = crud::where('id',$id)->first();
        $update->nama = $request['name'];
        $update->email= $request['email'];
        $update->deal=$request['deal'];
        $update->update();*/
         $product = crud::find($id);
         $product->nama = $request->nama;
         $product->email = $request->email;
         $product->deal = $request->deal;
         $product->save();
         return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$hapus = crud::find($id);
        $hapus->delete();*/
        $product = crud::destroy($id);
        return redirect()->route('/dashboard')->with('success','User deleted successfully');
       /* return response()->json($product)*/

    }

    public function getData($id)
    {
         $product = crud::find($id);
         return $product;
    }

}
