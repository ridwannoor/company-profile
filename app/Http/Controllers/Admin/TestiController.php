<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Testi;
use Session;

class TestiController extends Controller
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
        $testi = Testi::all();
        return view('admin.customize.testi', compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customize.addtesti');//
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
            Testi::create([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect ('/admin/testi') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/testi', $filename1);

            Testi::create([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,           
                'image' => $filename1
            ]);
            return redirect ('/admin/testi') ;
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
        $testi = Testi::find($id);
        // $id = $blog->id;
        return view('admin.customize.showtesti', compact('testi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testi = Testi::find($id);
        return view('admin.customize.edittesti', compact('testi'));
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
            Testi::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect ('/admin/testi') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/testi', $filename1);

            Testi   ::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,          
                'image' => $filename1
            ]);
            return redirect ('/admin/testi') ;
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
        $data = Testi::find($id);
        $data->delete($data);
        return redirect('/admin/testi');
    }

    public function publish($id)
    {       
        $testi = Testi::find($id);
        $testi->is_published = !$testi->is_published;
        $testi->save();  
        return redirect('/admin/testi');
    }
}
