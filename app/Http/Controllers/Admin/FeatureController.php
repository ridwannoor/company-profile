<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General;
use App\Models\Feature;

class FeatureController extends Controller
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
        $features = Feature::all();
        $gens = General::all();
        return view('admin.customize.feature', compact('gens','features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customize.addfeature');
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
            Feature::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect ('/admin/feature') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/feature', $filename);

            Feature::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,           
                'image' => $filename
            ]);
            return redirect ('/admin/feature') ;
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
        $feature = Feature::find($id);
        $gens = General::all();
        return view('admin.customize.editfeature', compact('gens','feature'));
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
           
            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi               
            ]);
            return redirect('/admin/feature') ;
        }


        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/feature', $filename);

            

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $filename,
                
                
            ]);
            return redirect('/admin/feature') ;
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
        $data = Feature::find($id);
        $data->delete($data);
        return redirect('/admin/feature');
    }
}
