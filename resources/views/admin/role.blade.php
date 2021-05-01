  
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
                                    <li class="breadcrumb-item active" aria-current="page">skill</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{route('admin.roles')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Role Form</h4>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uname" class="form-control" id="email"
                                                placeholder="Your role">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                                 <select   name="ustatus" class="form-control" id="cono1"
                                                placeholder="Gender"> 
                                                <option value=" ">--Status--</option>
                                                <option value="0">activ</option>
                                                <option value="1">Inactiv</option>
 
                                            </select>
                                        </div>
                                    </div>
                                    
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submites" class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
              @endsection