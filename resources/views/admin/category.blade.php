  
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
                            <form class="form-horizontal" action="{{route('admin.categorys')}}" method="POST">
                                @csrf
                                <input type="hidden" value="<?php echo (isset($id)) ? $id : '' ?>" name="id">
                                <div class="card-body">
                                    <h4 class="card-title">Categories Form</h4>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="uname" class="form-control" id="email"
                                                placeholder="your Name" value="{{isset($item->name) ? $item->name : ''}}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Parent Id</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                               @foreach($categore as $item)
                                                 <option value="{{$item->id}}">{{$item->name}}</option>
                                                 @endforeach
                                              </select>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select   name="ustatus" class="form-control" id="cono1"
                                                placeholder="Gender" > 
                                                 @foreach(status() as $s => $valu)
                                                    <option value={{$s}} {{ (isset($item->status) && ($item->status) == $s) ? 'selected="selected"' : '' }} >{{$valu}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                               @if(!isset($item->show_in_navigation))
                             
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="ushow_in_navigation" id="inlineCheckbox1"   value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">Show In Navigation</label>
                                     </div>
                              
                              @else

                             <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"  name="ushow_in_navigation" id="inlineCheckbox1"   value="1" <?php echo ($item->show_in_navigation == 1) ? 'checked' : '' ?>>
                             <label class="form-check-label" for="inlineCheckbox1">Show In Navigation</label>
                                     </div>
                                 
                                 @endif  
                                @if(!isset($item->is_featured))
                             
                               <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="checkbox" name="uis_featured" id="inlineCheckbox1" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">Is Featured</label>
                                     </div>
                              
                              @else

                             <div class="form-check form-check-inline">
                             <input class="form-check-input" type="checkbox" name="uis_featured" id="inlineCheckbox1" value="1" <?php echo ($item->is_featured == 1) ? 'checked' : '' ?>>
                             <label class="form-check-label" for="inlineCheckbox1">Is Featured</label>
                                     </div>
                                 
                                 @endif                                   

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submite" class="btn btn-primary">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
              @endsection