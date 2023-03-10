<div>
<div>
<div class="card">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h5 class="card-header">Products</h5>
   <a href="{{route('admin.addproduct')}}"><button class="btn btn-primary" style="width:15%;">Add Product</button></a> 
    <div class="table-responsive text-nowrap">
        <input type="search" placeholder="Search User" wire:model="" style="float:right;margin-right:30px;margin-bottom:20px;">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
               @foreach($products as $product)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$product->name}}</strong></td>
                   <td> <img src="{{$product->pic}}" alt="logo" class="h-full" style="width: 20%"/>
                   </td>
                   <td>
                        <a href="{{route('admin.editproduct',['id'=>$product->id])}}"><button class="btn btn-success">Edit</button></a><br>
                        <button class=" mt-2 btn btn-primary" wire:click.prevent='delete({{$product->id}})'>Delete</button>
  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>

</div>
