<div>
<div class="card">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <h5 class="card-header">Levels</h5>
    <a href="{{route('admin.addlevel')}}"><button class="btn btn-primary" style="width:15%;">Add Level</button></a> 
    <div class="table-responsive text-nowrap">
        <input type="search" placeholder="Search level" wire:model="search" style="float:right;margin-right:30px;margin-bottom:20px;">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Rank Name</th>
                    <th>Limit</th>
                    <th>Percentage</th>
                    <th>Members To Unlock Next Level</th>
                    <th>First Person Commision</th>
                    <th>Second Person Commision</th>
                    <th>Third Person Commision</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($levels as $level)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$level->title}}</strong></td>
                    <td><span class="badge bg-label-primary me-1">{{$level->limit}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$level->percentage}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$level->total_team_member}}</span></td>
                    <td><span class="badge bg-label-primary me-1" >{{$level->first_member_commision}}</span></td>
                    <td><span class="badge bg-label-primary me-1" >{{$level->second_member_commision}}</span></td>
                    <td><span class="badge bg-label-primary me-1">{{$level->third_member_commision}}</span></td>
                    <td>
                        <a href="{{route('admin.editlevel',['id'=>$level->id])}}"><button class="btn btn-success">Edit</button></a><br>
                        <button class=" mt-2 btn btn-primary" wire:click.prevent='delete({{$level->id}})'>Delete</button>
  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
