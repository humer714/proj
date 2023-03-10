<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Function_;

class SettingsController extends Controller
{
    public function setting(){
        $data = Settings::first();
        return view('admin.settings',['data'=> $data]);
    }
    public function update_setting(Request $request, $id){

        $data = Settings::find($id)->first();
        $data->easypaisa_title = $request->title;
        $data->points_value = $request->points;
        $data->easypaisa_no = $request->number;
        $data->registeramount = $request->registeramount;
        $data->text = $request->text;
        $data->save();
        return redirect()->route('admin.setting');
    }


}
