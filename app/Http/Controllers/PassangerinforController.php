<?php

namespace App\Http\Controllers;

use App\Models\Passangerinfor;
use Illuminate\Http\Request;

class PassangerinforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passangerinfors = Passangerinfor::latest()->paginate(5);
    
        return view('passangerinfors.index',compact('passangerinfors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passangerinfors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'FirstName'=>'required',
            'LastName'=>'required',
            'Gender'=>'required',
            'DateOfBirth'=>'required',
            'PhoneNumber'=>'required',
            'Email'=>'required',
            'locationFrom'=>'required',
            'locationto'=>'required',
            'n_id'=>'required',
            'Agance'=>'required',
        ]);
    
        Passangerinfor::create($request->all());
     
        return redirect()->route('passangerinfors.index')
                        ->with('success','Passanger created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passangerinfor  $passangerinfor
     * @return \Illuminate\Http\Response
     */
    public function show(Passangerinfor $passangerinfor)
    {
        return view('passangerinfors.show',compact('passangerinfor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passangerinfor  $passangerinfor
     * @return \Illuminate\Http\Response
     */
    public function edit(Passangerinfor $passangerinfor)
    {
        return view('passangerinfors.edit',compact('passangerinfor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passangerinfor  $passangerinfor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passangerinfor $passangerinfor)
    {
        $request->validate([
            'FirstName'=>'required',
            'LastName'=>'required',
            'Gender'=>'required',
            'DateOfBirth'=>'required',
            'PhoneNumber'=>'required',
            'Email'=>'required',
            'locationFrom'=>'required',
            'locationto'=>'required',
            'n_id'=>'required',
            'Agance'=>'required',
        ]);
    
        $passangerinfor->update($request->all());
    
        return redirect()->route('passangerinfors.index')
                        ->with('success','passanger updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passangerinfor  $passangerinfor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passangerinfor $passangerinfor)
    {
        $passangerinfor->delete();
    
        return redirect()->route('passangerinfors.index')
                        ->with('success','Passangerinfor deleted successfully');
    }
}
