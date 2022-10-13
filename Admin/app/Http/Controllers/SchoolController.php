<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = Team::all();
        return view('moe.schools.index')->withSchools($schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('moe.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $this->validateWith([
      //     'email' => 'required|email|unique:teams',
      //     'display_name' => 'required'
      // ]);

        $teams  = new Team();
        $teams->name = $request->schoolname;
        $teams->display_name = $request->display_name;
        $teams->description =  $request->description;
        $teams->email = $request->contact_email;
        $teams->contact = $request->contact_number;
        $teams->logo = $request->school_logo->storeAs('school_logo', ''.$request->schoolname.'.png');
        
        if( $teams != null)
        {
            $teams->save();
            toast('New School has been created.','success');
            return redirect()->route('schools.index');
            
        }
        else
        {
            toast('Could not create the new school due to an error.','error');
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
        //
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
