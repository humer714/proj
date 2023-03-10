<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Accountdetail;
use App\Models\Reward;
use App\Models\withdraw;
use Carbon\Carbon;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function payment()
    {
        $data = Settings::first();
        
        return view('payment',['data'=> $data]);
    }
    public function trxid(Request $request)
    {
        $data = User::find(Auth()->user()->id);
        $data->trx_id = $request->trx_id;
        $data->senderno = $request->senderno;
        $data->save();
        return redirect()->route('index');
    }
    public function chain()
    {
        $datas = User::find(auth()->user()->id);
        $details = $datas->invite()->where('role','approved')->get();
        // $details = User::with('invite')->where('id', auth()->user()->id)->get();
        // dd($details);

        return view('chain',['datas'=> $details]);
    }
    // public function chaindetail($id)
    // {
    //     $data = User::find($id);
    //     $details = $data->invite()->get();
        

    //     return view('chaindetail',['datas'=> $details, 'data'=>$data]);
    // }
    public function product()
    {
        $products = Product::all();
        return view('product',compact('products'));
    }

    public function change_currency(){
        $points = Settings::first()->points_value;
        $userpoints = Auth()->user()->points;
        
        $balance = $userpoints / $points;
        $user = User::find(Auth()->user()->id);
        $user->current_balance = $user->current_balance+$balance;
        $user->points = 0;
        $user->save();
        print_r(json_encode(''.$user->current_balance));
    }
public function wallet()

    {
        
        $flag = false;
        
        $data = Accountdetail::where('user_id', Auth()->user()->id)->first();
        if($data)
        {
            $flag = true;
        }
        $withdraws = Withdraw::where('user_id', Auth()->user()->id)->get();
        return view('wallet',['flag'=>$flag, 'withdarws'=>$withdraws]);
    }
    public function setting()
    {
        
        $data = Accountdetail::where('user_id', Auth()->user()->id)->first();
        return view('setting',['data'=> $data]);
    }

    public function invite()
    {
        return view('invite');
    }

    public function withdrawrequest()
    {
        
       
        $data = Withdraw::where('user_id', Auth()->user()->id)->where('status','pendding')->first();
        if($data){
            print_r(json_encode('false'));
        }
        else
        {
            $withdraw = auth()->user()->current_balance;
        $withdrawlimit = auth()->user()->level->limit;
        if($withdraw >= $withdrawlimit)
        {
            $user = Auth()->user()->current_balance;
            $withdraw = new withdraw();
            $withdraw->user_id = Auth()->user()->id;
            $withdraw->balance = $user;
            $withdraw->save();
            print_r(json_encode('true'));
        }    
            
            print_r(json_encode('limit'));
        }
       

    }
    public function collectreward()
    {
        return view('collectReward');
    }
    public function reward()
    {
        $user = User::find( Auth::user()->id);
        $record =Reward::where('user_id',$user->id)->whereDate('created_at',Carbon::today())->first();
        if(!$record){

            $user->points = $user->points+ $user->backend_wallet / 100 * 10;
            $user->backend_wallet = $user->backend_wallet - $user->backend_wallet / 100 * 10;
            $reward =Reward::create([
                'user_id'=>$user->id,
            ]);
            $user->Save();
            print_r(json_encode('true'));
        }
        else{
            print_r(json_encode('false'));
        }
    }
    public function perforn()

    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
