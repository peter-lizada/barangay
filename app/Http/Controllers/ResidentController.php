<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resident;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $residents = Resident::all();

        return view('resident.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('resident.create');
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
            'first_name'=>'required',
            'last_name'=>'required',
        ]);

        $resident = new Resident([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'middle_name' => $request->get('middle_name'),
            'extention_name' => $request->get('extention_name'),
            'birthday' => $request->get('birthday'),
            'rel_head' => $request->get('rel_head'),
            'marital_status' => $request->get('marital_status'),
            'address_1' => $request->get('address_1'),
            'address_2' => $request->get('address_2'),
            'mobile_num' => $request->get('mobile_num'),
            'telephone_num' => $request->get('telephone_num'),
            'telephone_num' => $request->get('telephone_num'),
            'email' => $request->get('email'),
            'education' => $request->get('education'),
            'height' => $request->get('height'),
            'weight' => $request->get('weight'),
            'business_name' => $request->get('business_name'),
            'house_built' => $request->get('house_built'),
            'employment_record' => $request->get('employment_record'),
            
        ]);
        $resident->save();
        
        return redirect('/resident')->with('success', 'Contact saved!');
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
        $resident = Resident::find($id);
        return view('resident.edit', compact('resident')); 
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
        ]);

        $resident = Resident::find($id);
        $resident->first_name = $request->get('first_name');
        $resident->last_name = $request->get('last_name');
        $resident->middle_name = $request->get('middle_name');
        $resident->extention_name = $request->get('extention_name');
        $resident->birthday = $request->get('birthday');
        $resident->rel_head = $request->get('rel_head');
        $resident->marital_status = $request->get('marital_status');
        $resident->address_1 = $request->get('address_1');
        $resident->address_2 = $request->get('address_2');
        $resident->mobile_num = $request->get('mobile_num');
        $resident->telephone_num = $request->get('telephone_num');
        $resident->telephone_num = $request->get('telephone_num');
        $resident->email = $request->get('email');
        $resident->education = $request->get('education');
        $resident->height = $request->get('height');
        $resident->weight = $request->get('weight');
        $resident->business_name = $request->get('business_name');
        $resident->house_built = $request->get('house_built');
        $resident->employment_record = $request->get('employment_record');
            
        $resident->save();
        return redirect('/resident')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resident = Resident::find($id);
        $resident->delete();

        return redirect('/resident')->with('success', 'Contact Deleted!');
    }
}
