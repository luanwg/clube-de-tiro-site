<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmSobre;
use Illuminate\Http\Request;

class AdmSobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(AdmSobre $sobre)
    {
        $this->sobre = $sobre;
    }

    public function index()
    {
        $sobre = $this->sobre->all();
        return view('adm.sobre', ['sobre' => $sobre]);
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
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function show(AdmSobre $admSobre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmSobre $admSobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sobre = $this->sobre->find($id);
        $sobre->update($request->all());
        return redirect('/adm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmSobre $admSobre)
    {
        //
    }
}
