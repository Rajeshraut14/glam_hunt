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
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Artist Datatable</h5>
                            <a style="margin-left:1000px"  href="{{route('admin.register')}}" class="btn btn-success">Add</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered datatable" border="1">
                                        <thead>
                                            @if(Session::has('success'))
                                          <p class="alert alert-danger">{{ Session::get('success') }}</p>
                                              @endif
                                            <tr>

                                                <th><b>Id</b></th>
                                                <th><b>Name</b></th>
                                                <th><b>Skill Id</b></th>
                                                <th><b>First Name</b></th>
                                                <th><b>Last Name</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>Phone</b></th>
                                                <th><b>Gender</b></th>
                                                <th><b>Status</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <th>{{$item->id}}</th>
                                                <th>{{$item->username}}</th>
                                                <th>{{$item->skill_id}}</th>
                                                <th>{{$item->first_name}}</th>
                                                <th>{{$item->last_name}}</th>
                                                <th>{{$item->email}}</th>
                                                <th>{{$item->phone}}</th>
                                                <th>{{gender($item->gender)}}</th>
                                                <th>{{status($item->status)}}</th>
                                                <td><a class="btn btn-success" href="{{route('admin.update',$item->id)}}"><i class="fa fa-edit"></i></a>

                                                <a class="btn btn-danger" href="{{route('admin.delete',$item->id)}}"><i class="fa fa-trash-alt"></i></a></td>                                            
                                                
                                             </tr>
                                            @endforeach 
                                        </tbody>

                                        <tfoot>
                                            <tr>

                                                <th><b>Id</b></th>
                                                <th><b>Name</b></th>
                                                <th><b>Skill Id</b></th>
                                                <th><b>First Name</b></th>
                                                <th><b>Last Name</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>Phone</b></th>
                                                <th><b>Gender</b></th>
                                                <th><b>Status</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        @endsection