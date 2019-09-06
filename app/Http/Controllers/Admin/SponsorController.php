<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use App\Models\General;


class SponsorController extends Controller
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
        $sponsors = Sponsor::all();
        $gens = General::all();
        return view('admin.customize.sponsor', compact('gens','sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customize.addsponsor');
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
            Sponsor::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect ('/admin/sponsor') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/sponsor', $filename);

            Sponsor::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,           
                'image' => $filename
            ]);
            return redirect ('/admin/sponsor') ;
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
        $sponsors = Sponsor::find($id);
        $gens = General::all();
        return view('admin.customize.editsponsor', compact('gens','sponsors'));
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
           
            Sponsor::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi               
            ]);
            return redirect('/admin/sponsor') ;
        }


        else {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/sponsor', $filename);
            Sponsor::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'image' => $filename,
                
                
            ]);
            return redirect('/admin/sponsor') ;
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
        $data = Sponsor::find($id);
        $data->delete($data);
        return redirect('/admin/sponsor');
    }
}
