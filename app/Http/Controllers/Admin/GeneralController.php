<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;

class GeneralController extends Controller
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
        // $id = $request->id;
        $gens = General::all();
        return view('admin.customize.general', compact('gens'));      
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
        if (!$file = $request->file('image')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('logo')->storeAs('public/admin/general', $filename);

            General::create([
                'logo' => $filename,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect(route('general.index')) ; 
        }
        elseif (!$file = $request->file('logo') && !$file = $request->file('image')) {
            General::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect(route('general.index')) ; 
        }
        elseif (!$file = $request->file('logo') || !$file = $request->file('image')) {
            General::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect(route('general.index')) ; 
        }
        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/general', $filename);

            General::create([
                'image' => $filename,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect(route('general.index')) ; 
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
        $gen = General::findOrFail($id);
        return view('admin.customize.editgen', compact('gen'));
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
        if (!$file = $request->file('image') && !$file = $request->file('logo')) {
            // $file = $request->file('logo');
            // $ext = $file->getClientOriginalExtension();
            // $filename = $request->id.time().".".$ext;            
            // $request->file('logo')->storeAs('public/admin/general', $filename);

            General::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                // 'logo' => $filename,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect('/admin/general') ;
        }
        elseif (!$file = $request->file('logo')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/general', $filename);

            General::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'image' => $filename,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect('/admin/general') ;
        }

        elseif (!$file = $request->file('image')) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('logo')->storeAs('public/admin/general', $filename);

            General::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'logo' => $filename,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect('/admin/general') ;
        }
        
        else {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('logo')->storeAs('public/admin/general', $filename);

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/general', $filename1);

            General::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'logo' => $filename,
                'image' => $filename1,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin, 
                'facebook'=> $request->facebook, 
                'instagram'=> $request->instagram, 
                'whatsapp'=> $request->whatsapp 
            ]);
            return redirect('/admin/general') ;
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
