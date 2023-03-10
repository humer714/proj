<div>
<div class="card">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header">New User</h5>
    <div class="table-responsive text-nowrap">
        <input type="search" placeholder="Search User" wire:model="search" style="float:right;margin-right:30px;margin-bottom:20px;">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Country</th>
                    <th>User Balance</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong></td>
                    <td><span class="badge bg-label-primary me-1">{{$user->email}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$user->phone}}</span></td>
                    <td><span class="badge bg-label-primary me-1" >{{$user->country}}</span></td>
                    <td><span class="badge bg-label-primary me-1" >{{$user->current_balance}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$user->type}}</span></td>
                    <td>
                        <button class="btn btn-success" wire:click.prevent='change_status({{$user->id}},"approved")'>Approved</button><br>
                        <button class=" mt-2 btn btn-primary" wire:click.prevent='change_status({{$user->id}},"rejected")'>Rejected</button>
  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
