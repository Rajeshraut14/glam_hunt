  
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

                            <form class="form-horizontal" action="{{route('admin.save')}}" method="POST">
                                @csrf

                                <input type="hidden" value="<?php echo (isset($id)) ? $id : '' ?>" name="id">
                                <div class="card-body">
                                    <h4 class="card-title">Artist Form</h4>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uusername" class="form-control" id="email"
                                                placeholder="Your Username" value="{{isset($item->username) ? $item->username : ''}}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Skill</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uskill" class="form-control" id="fname"
                                                placeholder="Your Skill" value="{{isset($item->skill_id) ? $item->skill_id : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ufirst" class="form-control" id="fname"
                                                placeholder="Your First Name " value="{{isset($item->first_name) ? $item->first_name : ''}}">
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ulast" class="form-control" id="lname"
                                                placeholder="Your Last Name " value="{{isset($item->last_name) ? $item->last_name : ''}}">
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
                                            class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="uphone" class="form-control" id="phome"
                                                placeholder="Your Phone" value="{{isset($item->phone) ? $item->phone : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select   name="ugender" class="form-control" id="cono1"
                                                placeholder="Gender"> 
                                                @foreach(gender() as $k => $val)
                                                    <option value={{$k}} {{ (isset($item->gender) && ($item->gender) == $k) ? 'selected="selected"' : '' }} >{{$val}}</option>
                                                @endforeach   
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select   name="ustatus" class="form-control" id="cono1"
                                                placeholder="Your Status" > 
                                                 @foreach(status() as $s => $valu)
                                                    <option value={{$s}} {{ (isset($item->status) && ($item->status) == $s) ? 'selected="selected"' : '' }} >{{$valu}}</option>
                                                @endforeach
                                            </select>
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