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
        if (!$file = $request->file('image') && !$file = $request->file('image1') && !$file = $request->file('image2') && !$file = $request->file('image3')) {
            // $file = $request->file('image');
            // $ext = $file->getClientOriginalExtension();
            // $filename = $request->id.time().".".$ext;            
            // $request->file('image')->storeAs('public/admin/feature', $filename);

            // $file = $request->file('image2');
            // $ext = $file->getClientOriginalExtension();
            // $filename2 = $request->id.time().".".$ext;            
            // $request->file('image2')->storeAs('public/admin/feature', $filename2);

            // $file = $request->file('image3');
            // $ext = $file->getClientOriginalExtension();
            // $filename3 = $request->id.time().".".$ext;            
            // $request->file('image3')->storeAs('public/admin/feature', $filename3);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                // 'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                // 'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                // 'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                // 'image3' => $filename3,
                
            ]);
            return redirect('/admin/feature') ;
        }

        elseif ( !$file = $request->file('image1') && !$file = $request->file('image2') && !$file = $request->file('image3')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/feature', $filename);

            // $file = $request->file('image2');
            // $ext = $file->getClientOriginalExtension();
            // $filename2 = $request->id.time().".".$ext;            
            // $request->file('image2')->storeAs('public/admin/feature', $filename2);

            // $file = $request->file('image3');
            // $ext = $file->getClientOriginalExtension();
            // $filename3 = $request->id.time().".".$ext;            
            // $request->file('image3')->storeAs('public/admin/feature', $filename3);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                // 'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                // 'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                // 'image3' => $filename3,
                
            ]);
            return redirect('/admin/feature') ;
        }

        elseif (!$file = $request->file('image') && !$file = $request->file('image2') && !$file = $request->file('image3')) {
            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image1')->storeAs('public/admin/feature', $filename);

            // $file = $request->file('image2');
            // $ext = $file->getClientOriginalExtension();
            // $filename2 = $request->id.time().".".$ext;            
            // $request->file('image2')->storeAs('public/admin/feature', $filename2);

            // $file = $request->file('image3');
            // $ext = $file->getClientOriginalExtension();
            // $filename3 = $request->id.time().".".$ext;            
            // $request->file('image3')->storeAs('public/admin/feature', $filename3);

           Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                // 'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                'image1' => $filename,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                // 'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                // 'image3' => $filename3,
                
            ]);
            // dd($feat);
            return redirect('/admin/feature') ;
        }
        
        elseif (!$file = $request->file('image1') && !$file = $request->file('image') && !$file = $request->file('image3') ) {
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename2 = $request->id.time().".".$ext;            
            $request->file('image2')->storeAs('public/admin/feature', $filename2);

            // $file = $request->file('image1');
            // $ext = $file->getClientOriginalExtension();
            // $filename1 = $request->id.time().".".$ext;            
            // $request->file('image1')->storeAs('public/admin/feature', $filename1);

            // $file = $request->file('image3');
            // $ext = $file->getClientOriginalExtension();
            // $filename3 = $request->id.time().".".$ext;            
            // $request->file('image3')->storeAs('public/admin/feature', $filename3);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                // 'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                // 'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                // 'image3' => $filename3,
                
            ]);
            return redirect('/admin/feature') ;
        }

        elseif (!$file = $request->file('image1') && !$file = $request->file('image2') && !$file = $request->file('image')) {
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename3 = $request->id.time().".".$ext;            
            $request->file('image3')->storeAs('public/admin/feature', $filename3);

            // $file = $request->file('image1');
            // $ext = $file->getClientOriginalExtension();
            // $filename1 = $request->id.time().".".$ext;            
            // $request->file('image1')->storeAs('public/admin/feature', $filename1);

            // $file = $request->file('image2');
            // $ext = $file->getClientOriginalExtension();
            // $filename2 = $request->id.time().".".$ext;            
            // $request->file('image2')->storeAs('public/admin/feature', $filename2);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                // 'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                // 'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                // 'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                'image3' => $filename3,
                
            ]);
            return redirect('/admin/feature') ;
        }

        elseif (!$file = $request->file('image') || !$file = $request->file('image1') || !$file = $request->file('image2') || !$file = $request->file('image3') ) {
            // $file = $request->file('image');
            // $ext = $file->getClientOriginalExtension();
            // $filename = $request->id.time().".".$ext;            
            // $request->file('image')->storeAs('public/admin/feature', $filename);

            // $file = $request->file('image1');
            // $ext = $file->getClientOriginalExtension();
            // $filename1 = $request->id.time().".".$ext;            
            // $request->file('image1')->storeAs('public/admin/feature', $filename1);

            // $file = $request->file('image2');
            // $ext = $file->getClientOriginalExtension();
            // $filename2 = $request->id.time().".".$ext;            
            // $request->file('image2')->storeAs('public/admin/feature', $filename2);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                // 'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                // 'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                // 'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                // 'image3' => $filename3,
                
            ]);
            return redirect('/admin/feature') ;
        }

        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/feature', $filename);

            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image1')->storeAs('public/admin/feature', $filename1);

            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename2 = $request->id.time().".".$ext;            
            $request->file('image2')->storeAs('public/admin/feature', $filename2);

            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename3 = $request->id.time().".".$ext;            
            $request->file('image3')->storeAs('public/admin/feature', $filename3);

            Feature::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $filename,
                'title1' => $request->title1,
                'deskripsi1' => $request->deskripsi1,
                'image1' => $filename1,
                'title2' => $request->title2,
                'deskripsi2' => $request->deskripsi2,
                'image2' => $filename2,
                'title3' => $request->title3,
                'deskripsi3' => $request->deskripsi3,
                'image3' => $filename3,
                
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
        //
    }
}
