@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Assign Role</h4>
                </div>
                <div class="card-body">
                    @if(Session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                    <div class="basic-form">
                        {{-- <form method="post" action="{{ route('admin.roles.update', $role->id) }}">
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
                        </form> --}}

                        <h3 class="mt-3">Roles </h4>
                        @if ($user->roles)
                            <div class="mt-2 ">
                                @foreach ($user->roles as $u_r)
                                <form method="post"  action="{{route('admin.users.removeRole',[$user,$u_r])}}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('Delete')
                                    <div class="row">

                                        <div class="col-md-4 my-2">
    
                                            <span>{{ $u_r->name }}</span>
                                            
                                            <button class="btn btn-danger" href="#">Delete</button>
                                        </div>
                                    </div>
                                    </form>
                                @endforeach
                            </div>
                        @endif

                            <h4 class="my-2">Assign Role</h4>
                        <form method="post" action="{{route('admin.users.assignRole.action',$user->id)}}">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <label class="form-label">Roles</label>
                                    <select name="role" id="" class="form-select">
                                        @foreach ($roles  as $p)
                                        <option value="{{$p->name}}">{{$p->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                    @error('roles')
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
