<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\billsnhap;
use App\Models\billdetailnhap;
use Illuminate\Support\Facades\DB;

use \Datetime;
class apihoadonnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return billsnhap:: with ('nhacungcap') ->get();
    }
    public function LayCTHDnhap($id)
    {
        return DB:: select ("CALL `XemChiTietHoaDonNhap`($id)");
    }

    public function LayTTKH($id)
    {
        return DB:: select ("CALL `LayTTKH`($id)");
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
        $db = new billsnhap();
        $db->id_ncc = $request->id_ncc;
        $db->id_nv= $request->id_nv;
        $db->date_order = new Datetime();
        $db->tong_tien= $request->tong_tien;
        $db->payment = 'on';
        $db->note ='';
        $db->updated_at = new Datetime();
        $db->created_at = new Datetime();
        $db->save();

        $details = $request->details;
        foreach($details as $detail) {
            $item = new billdetailnhap();
            $item->id_bill_nhap = $db->id;
            $item->id_dog = $detail['id'];
            $item->sl_dog = $detail['quantity'];
            $item->gia_nhap = $detail['unit_price'];
            $item->thanh_tien = $item->sl_dog*$item->gia_nhap;
            $item->save();
        }

        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return billsnhap::all();
        return billsnhap::findOrFail($id);
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
        $db = billsnhap::find($id);
        
        $db->id_ncc = $request->id_ncc;
        $db->id_nv= $request->id_nv;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->payment = $request->payment;
        $db->status = $request->status;
        $db->note = $request->note;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        billsnhap::findOrFail($id)->delete();
        return "Deleted";
    }
}