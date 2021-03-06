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
<li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Skill Datatable</h5>
                            <a style="margin-left:1000px"  href="{{route('admin.skill')}}" class="btn btn-success">Add</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered datatable">
                                        <thead>
                                            @if(Session::has('success'))
<p class="alert alert-danger">{{ Session::get('success') }}</p>
@endif
                                            <tr>

                                              <th><b>Id</b></th>
                                                <th><b>Skill Name</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($view as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->skill}}</td>

                                                <td><a class="btn btn-success" href="{{route('admin.skillupdate',$item->id)}}"><i class="fa fa-edit"></i></a>
                                           <a class="btn btn-danger" href="{{route('admin.skilldelete',$item->id)}}"><i class="fa fa-trash-alt"></i></a></td> 
                                             </tr>
                                            @endforeach 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th><b>Id</b></th>
                                                <th><b>Skill Name</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        @endsection