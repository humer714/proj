@extends('layout.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Settings</h4>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form method="Post" action="{{route('admin.updatesetting',['id'=> $data->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Easypaisa Title</label>
                            <input type="text" class="form-control" name="title" id="basic-default-fullname"  value="{{$data->easypaisa_title}}"/>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Easypaisa No</label>
                            <input class="form-control" type="text" name="number" id="" value="{{$data->easypaisa_no}}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Registeration Amount</label>
                            <input type="number" class="form-control" name="registeramount" id="basic-default-company" value="{{$data->registeramount}}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Discription</label>
                            <textarea type="text" class="form-control" name="text" id="basic-default-company" value="{{$data->text}}" >{{$data->text}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Points Value</label>
                            <input type="number" class="form-control" name="points" id="basic-default-company" value="{{$data->points_value}}" />
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection