<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\withdraw;

class With extends Component
{
    public string $role='pendding';
    public string $search = '';
    public function render()
    {

        $withdraws = withdraw::select('withdraws.*')->with('user')
            ->when(trim($this->search), function ($q) {
                $search = '%' . $this->search . '%';
                return $q->where('users.name', 'like', $search);
            })->where('status',$this->role)->paginate(10);
             return view('livewire.with', ['withdraws' => $withdraws]);
    }
    public function change_status($id , $status)
    {
        $withdraw = withdraw::find($id);
        $withdraw->status = $status;
        $withdraw->save();
        return view('livewire.with');

    }
    public function reject(){
        $this->role = 'rejected';
    }
    public function approved(){
        $this->role = 'approved';
    }
    public function pendding(){
        $this->role = 'pendding';
    }
}
