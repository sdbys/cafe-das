<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCustomerCtrl extends Controller
{
    function save_member (Request $req){
        $dtMember = $req->json()->all();
        // return json encode
        $kode = $dtMember["cus_kd"] ? $dtMember["cus_kd"] : Str::upper(Str::random(10));

        // proses simpan
        // update data member
        $save = customers::UpdateorCreate(
            [
                "id" => $dtMember["id"]
            ],
            [
                "cus_kd" => $kode,
                "cus_nm" => $dtMember["cus_nm"],
                "cus_alamat" => $dtMember["cus_alamat"],
                "cus_kota" => $dtMember["cus_kota"],
                "cus_telp" => $dtMember["cus_telp"],
                "cus_jk" => $dtMember["cus_jk"],
                "cus_user_id" => $dtMember ["cus_user_id"]
            ]
        );

        // cek
        if($save){
            User::where("id",$dtMember['cus_user_id'])->update([
                "name" => $dtMember ["cus_nm"]
            ]);
            // get data user 
            $user = User::where("id",$dtMember["cus_user_id"])->first();
            $member = customers::where("cus_kd",$kode)->first();

            // memberikan pesan apakah member baru atau update nama
            if($dtMember["id"]==null){
                $mess  = ["error"=>0,"mess"=>"Selamat Anda Menjadi Member !","data"=>["user"=>collect($user),"member"=>collect($member)]];
            }else {
                $mess  = ["error"=>0,"mess"=>"Data Updated !","data"=>["user"=>collect($user),"member"=>collect($member)]]; 
            }
        }else {
            $mess  = ["error"=>1,"mess"=>"Oops ! Any something wrong !","data"=>null];
        }
        return response()->json($mess);
    }
}
