<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accountdetail;
use Illuminate\Support\Facades\Auth;

class AccountdetailController extends Controller
{
    public function add_account(Request $request)
    {
   
        $detail = Accountdetail::create([
            'user_id' => Auth()->user()->id,
            'title' => $request->title,
            'bankname' => $request->name,
            'number' => $request->number,
        ]);
        $detail->save();
        $hasValue = true;
        return redirect()->route('index')->with('hasValue' , $hasValue);
    }
    public function update_account(Request $request, $id){

        $data = Accountdetail::find($id)->first();
        $data->title = $request->title;
        $data->bankname = $request->name;
        $data->number = $request->number;
        $data->save();
        $hasValue = true;
        return redirect()->route('index')->with('hasValue' , $hasValue);
    }

}
