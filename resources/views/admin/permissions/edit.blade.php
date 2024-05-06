@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Permission</h4>
            </div>
            <div class="card-body">
                @if(Session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                <div class="basic-form">
                    <form method="post" action="{{route('admin.permissions.update',$permission)}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <div class="col-sm-12">
                                <label class="form-label">Name</label>
                                <input type="text" required name="name" value="{{$permission->name}}" class="form-control" placeholder="Name of Permission">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
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
                        @if ($permission->roles)
                            <div class="mt-2 ">
                                @foreach ($permission->roles as $r_p)
                                <form method="post" action="{{route('admin.permission.roles.remove',[$permission->id,$r_p->id])}}" onsubmit="return confirm('Are you sure?')">
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


                        <form method="post" action="{{route('admin.permission.roles.assign',$permission)}}">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="form-label">Roles</label>
                                    <select name="role" id="" class="form-select">
                                        @foreach ($roles  as $r)
                                        <option value="{{$r->name}}">{{$r->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                    @error('role')
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