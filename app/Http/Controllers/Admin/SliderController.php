<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\General;

class SliderController extends Controller
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
        $slider = Slider::all();
        // dd($slider);
        $gens = General::all();
        return view('admin.customize.slider', compact('gens','slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customize.addslider');
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
            Slider::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect ('/admin/slider') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
           $request->file('image')->storeAs('public/admin/slider', $filename);
            // dd($fi);
            Slider::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,           
                'image' => $filename
            ]);
            return redirect ('/admin/slider') ;
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
        $slider = Slider::find($id);
        $gens = General::all();
        return view('admin.customize.editslider', compact('gens','slider'));
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
           
            Slider::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi               
            ]);
            return redirect('/admin/slider') ;
        }


        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/slider', $filename);
            Slider::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $filename,
                
                
            ]);
            return redirect('/admin/slider') ;
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
        $data = Slider::find($id);
        $data->delete($data);
        return redirect('/admin/slider');
    }
}
