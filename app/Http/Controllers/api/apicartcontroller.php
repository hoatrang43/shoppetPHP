<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chocanh;
use App\Models\phukien;
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

    public function getcart()
    {
        return $_SESSION['product_cart'];
    }

    public function addcart($id)
    {
        $db = chocanh::findOrFail($id);
        $p_id=$db->id;
        $name_dog=$db->name_dog;
        $gia_ban = $db->gia_ban;
        if(isset($_SESSION['product_cart'][$p_id])){
            foreach($_SESSION['product_cart'] as $key => $value){
                if($_SESSION['product_cart'][$key]['id'] == $p_id){
                    $_SESSION['product_cart'][$key]['sl']=$_SESSION['product_cart'][$key]['sl']+1;
                    $_SESSION['product_cart'][$key]['total_price']=$_SESSION['product_cart'][$key]['total_price']+$gia_ban;
                }
            }
        }
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
        $db->id_giong=$request->id_giong;
        $db->mau_sac= $request->mau_sac;
        $db->gioi_tinh= $request->gioi_tinh;
        $db->tuoi = $request->tuoi;
        $db->gia_ban = $request->gia_ban;
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
        $db->mau_sac= $request->mau_sac;
        $db->gioi_tinh= $request->gioi_tinh;
        $db->tuoi = $request->tuoi;
        $db->gia_ban = $request->gia_ban;
        $db->created_at = new Datetime();
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
