<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chocanh;
use Illuminate\Support\Facades\DB;
use \Datetime;

class apichocanhcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return chocanh::all();
        return chocanh:: with ('giongcho') ->get();
    }

    public function listSPBanChay()
    {
        return DB::select("CALL `SANPHAMBANCHAY`()");
    }
    public function listSPMoi()
    {
        return DB::select("CALL `SANPHAMMOI`()");
    }
    
    public function listPKMoi()
    {
        return DB::select("CALL `PHUKIENMOI`()");
    }

    public function TTGiong($id)
    {
        return DB::select("CALL `LAYTTGIONG`($id)");
    }

    public function getDog($id){
        $dog_loai=chocanh::where('id_giong', $id)->get();
        return $dog_loai;
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
        $db = new chocanh();
        $db->name_dog = $request->name_dog;
        $db->anh = $request->anh;
        $db->anh_nho1 = $request->anh_nho1;
        $db->anh_nho2 = $request->anh_nho2;
        $db->anh_nho3 = $request->anh_nho3;
        $db->id_giong=$request->id_giong;
        $db->mau_sac= $request->mau_sac;
        $db->gioi_tinh= $request->gioi_tinh;
        $db->tuoi = $request->tuoi;
        $db->gia_ban = $request->gia_ban;
        $db->nguon_goc = $request->nguon_goc;
        $db->giay_to = $request->giay_to;
        $db->tiem_phong = $request->tiem_phong;
        $db->tay_giun = $request->tay_giun;
        $db->sl = $request->sl;
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
        return chocanh::findOrFail($id);
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
        $db = chocanh::find($id);
        $db->name_dog = $request->name_dog;
        $db->anh = $request->anh;
        $db->anh_nho1 = $request->anh_nho1;
        $db->anh_nho2 = $request->anh_nho2;
        $db->anh_nho3 = $request->anh_nho3;
        $db->id_giong=$request->id_giong;
        $db->mau_sac= $request->mau_sac;
        $db->gioi_tinh= $request->gioi_tinh;
        $db->tuoi = $request->tuoi;
        $db->gia_ban = $request->gia_ban;
        $db->nguon_goc = $request->nguon_goc;
        $db->giay_to = $request->giay_to;
        $db->tiem_phong = $request->tiem_phong;
        $db->tay_giun = $request->tay_giun;
        $db->sl = $request->sl;
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
        chocanh::findOrFail($id)->delete();
        return "Deleted";
    }
}
