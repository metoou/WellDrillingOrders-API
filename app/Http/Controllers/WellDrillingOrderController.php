<?php

namespace App\Http\Controllers;

use App\WellDrillingOrders;
use Illuminate\Http\Request;

class WellDrillingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetAllWellDrillingOrders()
    {
        $wellDrillingOrders = WellDrillingOrders::orderBy('id', 'desc')->get();
        return response()->json($wellDrillingOrders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateWellDrillingOrder(Request $request)
    {
        $wellDrillingOrders = new WellDrillingOrders;
        $wellDrillingOrders->customer = $request->customer;
        $wellDrillingOrders->contractor = $request->contractor;
        $wellDrillingOrders->oilField = $request->oilField;
        $wellDrillingOrders->wellNumber = $request->wellNumber;
        $wellDrillingOrders->wellPurpose = $request->wellPurpose;
        $wellDrillingOrders->drillingRig = $request->drillingRig;
        $wellDrillingOrders->wellDesign = $request->wellDesign;
        $wellDrillingOrders->direction = $request->direction;
        $wellDrillingOrders->conductor = $request->conductor;
        $wellDrillingOrders->operatingColumn = $request->operatingColumn;
        $wellDrillingOrders->diameter = $request->diameter;
        $wellDrillingOrders->artificialFaceDepth = $request->artificialFaceDepth;
        $wellDrillingOrders->installationDepth = $request->installationDepth;
        $wellDrillingOrders->save();
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function GetWellDrillingOrderById($id)
    {
        $wellDrillingOrders = WellDrillingOrders::findOrFail($id);
        return response()->json($wellDrillingOrders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateWellDrillingOrder(Request $request, $id)
    {
        $wellDrillingOrders = WellDrillingOrders::findOrFail($id);
        $wellDrillingOrders->customer = $request->customer;
        $wellDrillingOrders->contractor = $request->contractor;
        $wellDrillingOrders->oilField = $request->oilField;
        $wellDrillingOrders->wellNumber = $request->wellNumber;
        $wellDrillingOrders->wellPurpose = $request->wellPurpose;
        $wellDrillingOrders->drillingRig = $request->drillingRig;
        $wellDrillingOrders->wellDesign = $request->wellDesign;
        $wellDrillingOrders->direction = $request->direction;
        $wellDrillingOrders->conductor = $request->conductor;
        $wellDrillingOrders->operatingColumn = $request->operatingColumn;
        $wellDrillingOrders->diameter = $request->diameter;
        $wellDrillingOrders->artificialFaceDepth = $request->artificialFaceDepth;
        $wellDrillingOrders->installationDepth = $request->installationDepth;
        $wellDrillingOrders->save();
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete($id)
    {
        $wellDrillingOrders = WellDrillingOrders::findOrFail($id);
        $wellDrillingOrders->delete();
        return response()->json($wellDrillingOrders);
    }
}
