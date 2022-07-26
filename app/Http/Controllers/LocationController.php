<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Exception;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location=Location::first();
        //return $location;
       
        $arr = array("latitude"=>'-6.9032739', "longitude"=>'107.5731172', "address"=>'bandung');
       $initLocation= json_encode($arr);
       
        return view('location.index',[
            'location'=>$location??$initLocation
        ]);
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
        //return "Tes";
        //
       try{
        $location=Location::first();
        if ($location!=null){
            $location=Location::first();
            $location->latitude=$request->latitude;
            $location->longitude=$request->longitude;
            $location->address=$request->address;
            $location->save();
        }else{
            $location=new Location;
            $location->latitude=$request->latitude;
            $location->longitude=$request->longitude;
            $location->address=$request->address;
            $location->save();
        }

        return response()->json([
            'message' => 'Data has been saved',
            'error' => true,
            'code' => 200,
        ]);

       }catch(Exception $e){

        return response()->json([
            'message' => 'Internal Error',
            'error' => true,
            'code' => 500,
            'errors' => $e
        ], 500);
        
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
