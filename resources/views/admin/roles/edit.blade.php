@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Role</h4>
                </div>
                <div class="card-body">
                    @if(Session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                    <div class="basic-form">
                        <form method="post" action="{{ route('admin.roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" required name="name" value="{{ $role->name }}"
                                        class="form-control" placeholder="Name of Permission">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>

                        <h3 class="mt-3">Roles & Permission</h4>
                        @if ($role->permissions)
                            <div class="mt-2 ">
                                @foreach ($role->permissions as $r_p)
                                <form method="post" action="{{route('admin.roles.permission.revoke',[$role->id,$r_p->id])}}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('Delete')
                                    <div class="col-md-4">

                                        <span>{{ $r_p->name }}</span>
                                        
                                        <button class="btn btn-danger" href="#">Delete</button>
                                    </div>
                                    </form>
                                @endforeach
                            </div>
                        @endif


                        <form method="post" action="{{route('admin.roles.permission',$role->id)}}">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="form-label">Permission</label>
                                    <select name="permission" id="" class="form-select">
                                        @foreach ($permissions  as $p)
                                        <option value="{{$p->name}}">{{$p->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                    @error('permission')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Assign</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
