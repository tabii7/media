@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new Role</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post" action="{{route('admin.roles.store')}}">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <label class="form-label">Name</label>
                                <input type="text" required name="name" class="form-control" placeholder="Name of role">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection