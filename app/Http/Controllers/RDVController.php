<?php

namespace App\Http\Controllers;

use App\Models\RDV;
use App\Http\Requests\StoreRDVRequest;
use App\Http\Requests\UpdateRDVRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RDVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRDVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRDVRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function show(RDV $rDV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function edit(RDV $rDV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRDVRequest  $request
     * @param  \App\Models\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRDVRequest $request, RDV $rDV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RDV  $rDV
     * @return \Illuminate\Http\Response
     */
    public function destroy(RDV $rDV)
    {
        //
    }

    public function search(Request $request){

        $dates= array('9:00','10:00','11:00','12:00','13:00'
    ,'14:00','15:00','16:00');
    $dates0=array();
        $jour=Carbon::parse($request->input('jour'))
        ->format('Y-m-d');
        $heures=RDV::all();
        for($i=0;$i<count($dates);$i++){
            foreach($heures as $item) {
                if($item ->heure == $dates[$i] ){
                    unset($dates[$i]);
                    $dates0[]=$dates[$i];
            }
        }
        
    }
        return view('index',compact('jour','heures','dates','dates0'));
    }
}
