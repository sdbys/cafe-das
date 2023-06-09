<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTransCtrl extends Controller
{
    function getTrans(Request $req){

        $data = DB::select("SELECT transactions.*,customers.cus_nm FROM transactions
        INNER JOIN customers ON transactions.trans_cus_id = customers.id
        WHERE transactions.trans_cus_id = ".$req->id_cus." ORDER BY transactions.id DESC");

        return response()->json($data);
    }

}
