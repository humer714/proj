<div>
<div class="card">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header">Withdraw Requests</h5>
    <div>
    <button class="btn btn-sm btn-primary" wire:click.prevent='approved'  >Approved</button>
    <button class="btn btn-sm btn-primary" wire:click.prevent='reject' >Rejected</button>
    <button class="btn btn-sm btn-primary" wire:click.prevent='pendding' >Pendding</button>
    </div>
    <div class="table-responsive text-nowrap">
        <input type="search" placeholder="Search User" wire:model="search" style="float:right;margin-right:30px;margin-bottom:20px;">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Balance</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($withdraws as $withdraw)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$withdraw->user->name}}</strong></td>
                    <td><span class="badge bg-label-primary me-1" >{{$withdraw->balance}}</span></td>
                    <td><span class="badge bg-label-primary me-1" >{{$withdraw->status}}</span></td>
                    
                    <td>
                        <button class="btn btn-success" wire:click.prevent='change_status({{$withdraw->id}},"approved")'>Approved</button><br>
                        <button class=" mt-2 btn btn-primary" wire:click.prevent='change_status({{$withdraw->id}},"rejected")'>Rejected</button>
  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
