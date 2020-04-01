<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Backoffice\Attribute;
use App\Http\Requests\AttributeRequest;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::all();

        return view('backoffice.catalog.attribute',compact('attributes'));
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
        $request->validate([
            'name_en'           =>  'required|unique:parts_bazar',
            'name_bn'           =>  'required|unique:parts_bazar',
            'attribute_type'    =>  'required',
        ]);

        $attribute = new Attribute;

        $attribute->name_en         =   $request->name_en;
        $attribute->name_bn         =   $request->name_bn;
        $attribute->public_name     =   $request->public_name;
        $attribute->attribute_type  =   $request->attribute_type;
        $attribute->status          =   $request->status;

        $attribute->save();

        return redirect()->back()->with('success','Attribute saved successfully!');
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
        $attribute = Attribute::find($id);
        return view('backoffice.catalog.edit-attribute',compact('attribute'));
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
            'name_en'           =>  'required|unique:parts_bazar',
            'name_bn'           =>  'required|unique:parts_bazar',
            'attribute_type'    =>  'required',
        ]);
        
        $attribute = Attribute::find($id);
        
        $attribute->name_en         = $request->name_en;
        $attribute->name_bn         = $request->name_bn;
        $attribute->public_name     = $request->public_name;
        $attribute->attribute_type  = $request->attribute_type;
        $attribute->status          = $request->status;

        $attribute->save();
        
        return redirect()->back()->with('success','Attribute update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attribute::where('id', $id)->delete();
        return redirect()->back()->with('success','Attribute delete successfully.');
    }

}
