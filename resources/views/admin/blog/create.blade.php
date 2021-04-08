@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12">
                <div class="block" style="background-color: #222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div class="title"><strong>Add A Blog Post</strong></div>
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
                    <form class="form-horizontal"  method="POST" action="{{ url('admin/blog') }}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Post Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Post Date</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="day">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Month</label>
                        <div class="col-sm-9">
                        <select name="month" class="form-control mb-3 mb-3" >
                            <option value="JAN">Jan</option>
                            <option value="FEB">Feb</option>
                            <option value="MARCH">March</option>
                            <option value="APRIL">April</option>
                            <option value="MAY">May</option>
                            <option value="JUNE">June</option>
                            <option value="JULY">July</option>
                            <option value="AUG">Aug</option>
                            <option value="SEP">Sep</option>
                            <option value="OCT">Oct</option>
                            <option value="NOV">Nov</option>
                            <option value="DEC">Dec</option>
                          </select>
                        </div></div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Post Year</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="year">
                          </div>
                        </div>

                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Image</label>
                        <div class="col-sm-9">

                            <input type="file" name="image" class="form-control">

                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="4" requried></textarea>
                        </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">

                          <button name="upload"  type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection
