<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\General;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::all();
        $gens = General::all();
        return view('admin.shop.index', compact('gens','shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shop.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$file = $request->file('image')) {
            Shop::create([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'qty' => $request->qty,
            ]);
            return redirect ('/admin/shop') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/shop', $filename);

            Shop::create([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'qty' => $request->qty,         
                'image' => $filename
            ]);
            return redirect ('/admin/shop') ;
        }
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
        $shop = Shop::find($id);
        $gens = General::all();
        return view('admin.shop.edit', compact('gens','shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!$file = $request->file('image')) {
           
            Shop::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'qty' => $request->qty,             
            ]);
            return redirect('/admin/shop') ;
        }


        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/shop', $filename);
            Shop::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'qty' => $request->qty,
                'image' => $filename,
                
                
            ]);
            return redirect('/admin/shop') ;
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
        $data = Shop::find($id);
        $data->delete($data);
        return redirect('/admin/shop');
    }
}
