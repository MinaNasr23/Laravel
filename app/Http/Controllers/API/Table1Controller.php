<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Table1;
use Illuminate\Http\Request;

class Table1Controller extends Controller
{
    public function index()
    {
        //conncet database
        $table1_API = Table1::all();
        //API Format
        $output_json = [
            "msg" => "All data in table1",
            "status" => 200,
            "products" => $table1_API
        ];
        //Api Response
        return response()->json($output_json);
    }

    public function addproduct(Request $request)
    {
        $new_product = Table1::create(
            [
                "SKU" => $request->SKU,
                "Name" => $request->Name,
                "Price" => $request->Price,
                "Type_switcher" => $request->Type_switcher,
                "Size" => $request->Size,
                "Height" => $request->Height,
                "Width" => $request->Width,
                "Length" => $request->Length,
                "Weight" => $request->Weight,
            ]
        );

        return redirect('http://localhost:3000/');
    }

    public function mass_delete(Request $request)
    {
        $del_ids_array = $request->del_ids_chk;
        if ($request->del_ids_btn) {
            if ($del_ids_array  > 0) {
                foreach ($del_ids_array as $el) {
                    // $table1_API = Table1::all();
                    $delete = Table1::find($el);
                    $delete->delete();
                }
            }
        }
        return redirect('http://localhost:3000/');
    }
}
