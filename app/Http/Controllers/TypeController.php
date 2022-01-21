<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

use Illuminate\Http\Request;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('type.index',['types'=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;

        $type->name = $request->type_name;
        $type->short_name = $request->type_shortname;
        $type->description = $request->type_description;

        $type->save();

        return redirect()->route('type.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view('type.show', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('type.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRequest  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->name = $request->type_name;
        $type->short_name = $request->type_shortname;
        $type->description = $request->type_description;

        $type->save();

        return redirect()->route('type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $companies = $type->typeCompanies; //visas kompanijas kurios priklaso tipui

        if(count($companies) != 0) {
            return redirect()->route('type.index')->with('error_message','Delete is not possible because type has companies');
        }

        $type->delete();
         return redirect()->route('type.index')->with('success_message', 'Everything is fine');
    }
}
