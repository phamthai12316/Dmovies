@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12">
                <div class="block" style="background-color: #222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div class="title"><strong>Edit Director</strong></div>
                  <div class="block-body">
                    @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
                  @endif
                    <form class="form-horizontal"  method="POST" action="/admin/blog/{{ $blog->id }}" enctype="multipart/form-data">
                    	  {{ method_field('PATCH') }}
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Post Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="{{$blog->name}}">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Post Date</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="day" value="{{$blog->day}}">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Month</label>
                        <div class="col-sm-9">
                        <select name="month" class="form-control mb-3 mb-3" value="{{$blog->month}}" >
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                          </select>
                        </div></div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Post Year</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="year" value="{{$blog->year}}">
                          </div>
                        </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Image</label>
                        <div class="col-sm-9">
                        <img width="150px" height="150px" src="{{asset('/images/blog/'.$blog->image)}}">
                            <input type="file" name="image" class="form-control">

                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="6" >{{$blog->desc}}</textarea>
                        </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">

                          <button name="upload" value="Upload" type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection
