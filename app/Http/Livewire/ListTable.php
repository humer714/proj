<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;

class ListTable extends Component
{
    public string $search = '';
 


    public function render()
    {

        $users = User::select('users.*')
            ->when(trim($this->search), function ($q) {
                $search = '%' . $this->search . '%';
                return $q->where('users.email', 'like', $search)->orwhere('users.name', 'like', $search);
            })
            ->where('type', 'user')->where('role', 'approved')
            ->paginate(10);

        

        return view('livewire.list-table', ['users' => $users]);
    }
   
}