  
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
                            <form class="form-horizontal" action="{{route('admin.edit',$item->id)}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Update Form</h4>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uusername" class="form-control" id="email"
                                                placeholder="Your Username" value="{{$item->username}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Skill</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uskill" class="form-control" id="fname"
                                                placeholder="Your Skill" value="{{$item->skill_id}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ufirst" class="form-control" id="fname"
                                                placeholder="Your First Name " value="{{$item->first_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ulast" class="form-control" id="lname"
                                                placeholder="Your Last Name " value="{{$item->last_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="uemail" class="form-control" id="email"
                                                placeholder="Your Email" value="{{$item->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone1"
                                            class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="uphone" class="form-control" id="phome"
                                                placeholder="Your Phone" value="{{$item->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select   name="ugender" class="form-control" id="cono1"
                                                placeholder="Gender value="{{$item->gender}}"> 
                                                <option value="0">--Gender--</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Transgender</option>
 
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select   name="ustatus" class="form-control" id="cono1">
                                                <option value="">--Status--</option>
                                                <option value="0" <?php echo ($item->status == 0) ? 'selected="selected"' : '' ?>>active</option>
                                                <option value="1" <?php echo ($item->status == 1) ? 'selected="selected"' : '' ?>>Inactive</option>                                            
 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">

                                            <input type="password" name="upassword" class="form-control" id="cono1"
                                                placeholder="Your Password" value="{{$item->password}}">
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