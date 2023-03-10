@extends('layout.admin')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<form action="{{route('admin.storelevel')}}" method="POST">
    @csrf
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Rank Name</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="" required
                                name="title" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Members To Unlock Next Level</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder=" " required
                                name="total_members" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Limit</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder="" required
                                name="limit" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">percentage</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder=" " required
                                name="percentage" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">First Person Commision</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder="" required
                                name="first_person" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Second Person Commision</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder=" " required
                                name="second_person" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Third Person Commision</h5>
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingInput" placeholder="" required
                                name="third_person" aria-describedby="floatingInputHelp" />
                        </div>
                    </div>
                </div>
            </div>

        <div class="mt-2 text-center">
            <button type="submit" class="btn btn-primary me-2">Submit</button>

        </div>
    </div>
</form>
</div>

@endsection