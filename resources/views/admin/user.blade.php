  
  @extends('layouts.admin')

@section('content')
                <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    <li class="breadcrumb-item active" aria-current="page">Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{route('admin.users')}}" method="POST">
                                @csrf
                                 <input type="hidden" value="<?php echo (isset($id)) ? $id : '' ?>" name="id">
                                <div class="card-body">
                                    <h4 class="card-title">User Form</h4>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="uname" class="form-control" id="fname"
                                                placeholder="First Name " value="{{isset($item->name) ? $item->name : ''}}">
                                        </div>
                                    </div>
                                  @if(!isset($item->email))
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="uemail" class="form-control" id="email"
                                                placeholder="Your Email" >
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group row">
                                        <label for="phone1"
                                            class="col-sm-3 text-end control-label col-form-label">Role Id</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="urole" class="form-control" id="phome"
                                                placeholder="Role id" value="{{isset($item->role_id) ? $item->role_id : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                           <input type="password" name="upassword" class="form-control" id="cono1"
                                                placeholder="Your Password" value="{{isset($item->password) ? $item->password : ''}}">
                                        </div>
                                    </div>
                                    
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
              @endsection