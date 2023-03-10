<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Settings;
use App\Models\Level;
use Livewire\Component;

class NewUser extends Component
{ public string $search = '';
    public string $filter = '';
    public $userDetails = null;


    public function render()
    {

        $users = User::select('users.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . $this->search . '%';
                return $q->where('users.email', 'like', $search)->orwhere('users.name', 'like', $search);
            }) ->where('type', 'user')->where('role', 'pendding')->paginate(10);
             return view('livewire.new-user', ['users' => $users]);
    }
    public function change_status($id , $status)
    {
        $user = User::find($id);
        $user->role = $status;
        $levelid = $user->level_id;
        $level = Level::find($levelid);
        $amount = Settings::first()->registeramount;
        $data = $user->invite_id;
       
        if($status == 'approved'){
            $user->backend_wallet = $amount / 100 * $level->percentage;
            $user->save();
        }
       

        if($data)
        {
            $userinvite = User::find($data);
            $count = User::where('invite_id', $data)->where('role', 'approved')->count();
            if($count == $level->total_team_member)
            {
                $userinvite->level_id = $userinvite->level_id+1;
                $userinvite->level_id->save();
            }
            $level = Level::find($userinvite->level_id);
            $userinvite->backend_wallet = $amount / 100 * $level->first_member_commision;
            $userinvite->save();
            if($userinvite->invite_id)
            {
                $seconduser = User::find($userinvite->invite_id);
                $level = Level::find($seconduser->level_id);
                $seconduser->backend_wallet = $amount / 100 * $level->second_member_commision;
                $seconduser->save();
            }
            if($seconduser->invite_id)
            {
                $thirduser = User::find($seconduser->invite_id);
                $level = Level::find($thirduser->level_id);
                $thirduser->backend_wallet = $amount / 100 * $level->third_member_commision;
                $thirduser->save();
            }
            
        }
        return view('livewire.new-user');

    }
}
