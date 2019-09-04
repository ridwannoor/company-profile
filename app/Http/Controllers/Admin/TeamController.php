<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General;
use App\Models\Team;

class TeamController extends Controller
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
        $gens = General::all();
        $team = Team::all();
        return view('admin.customize.team', compact('team', 'gens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customize.addteam');
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
            Team::create([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram
            ]);
            return redirect ('/admin/team') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/team', $filename1);

            Team::create([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,             
                'image' => $filename1
            ]);
            return redirect ('/admin/team') ;
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
        $team = Team::find($id);
        return view('admin.customize.editteam', compact('team'));
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
            Team::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram
            ]);
            return redirect ('/admin/team') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/team', $filename1);

            Team::where('id','=', $request->id)
            ->update([
                'name' => $request->name,
                'title' => $request->title,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,              
                'image' => $filename1
            ]);
            return redirect ('/admin/team') ;
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
        $data = Team::find($id);
        $data->delete($data);
        return redirect('/admin/team');
    }
}
