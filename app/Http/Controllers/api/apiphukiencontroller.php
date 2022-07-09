<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\phukien;
use Illuminate\Support\Facades\DB;
use \Datetime;
class apiphukiencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return phukien:: with ('loaiphukien') ->get();
    }
    public function getLoai($id){
        $sp_loai=phukien::where('id_lpk', $id)->get();
        return $sp_loai;
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
        $db = new phukien();
        $db->id_lpk = $request->id_lpk;
        $db->ten_pk = $request->ten_pk;
        $db->anh = $request->anh;
        $db->xuat_xu = $request->xuat_xu;
        $db->thuong_hieu = $request->thuong_hieu;
        $db->chat_lieu = $request->chat_lieu;
        $db->the_tich = $request->the_tich;
        $db->khoi_luong = $request->khoi_luong;
        $db->gia_ban = $request->gia_ban;
        $db->sl = $request->sl;
        $db->thong_tin = $request->thong_tin;
        $db->thanh_phan_nguyen_lieu = $request->thanh_phan_nguyen_lieu;
        $db->cong_dung = $request->cong_dung;
        $db->cach_su_dung = $request->cach_su_dung;
        $db->anh_nho1 = $request->anh_nho1;
        $db->anh_nho2 = $request->anh_nho2;
        $db->anh_nho3 = $request->anh_nho3;
        $db->created_at = new Datetime();
        $db->save();
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
        return phukien::findOrFail($id);
    }

    public function listPKMoi()
    {
        return DB::select("CALL `PHUKIENMOI`()");
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
        $db = phukien::find($id);
        $db->id_lpk = $request->id_lpk;
        $db->ten_pk = $request->ten_pk;
        $db->anh = $request->anh;
        $db->xuat_xu = $request->xuat_xu;
        $db->thuong_hieu = $request->thuong_hieu;
        $db->chat_lieu = $request->chat_lieu;
        $db->the_tich = $request->the_tich;
        $db->khoi_luong = $request->khoi_luong;
        $db->gia_ban = $request->gia_ban;
        $db->sl = $request->sl;
        $db->thong_tin = $request->thong_tin;
        $db->thanh_phan_nguyen_lieu = $request->thanh_phan_nguyen_lieu;
        $db->cong_dung = $request->cong_dung;
        $db->cach_su_dung = $request->cach_su_dung;
        $db->anh_nho1 = $request->anh_nho1;
        $db->anh_nho2 = $request->anh_nho2;
        $db->anh_nho3 = $request->anh_nho3;
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
        phukien::findOrFail($id)->delete();
        return "Deleted";
    }
}
