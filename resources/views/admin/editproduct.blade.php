@extends('layout.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Product</h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="Post" action="{{route('admin.updateproduct',['id'=>$product->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Product Name</label>
                            <input type="text" value="{{$product->name}}" class="form-control" name="name" id="basic-default-fullname" />
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Price</label>
                            <input type="number" class="form-control" name="price" id="basic-default-company" />
                        </div> -->
                        <div class="mb-3">
                            <label for="formFile" value="{{$product->pic}}" class="form-label">Product Image</label>
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection