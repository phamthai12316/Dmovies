@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12">
                <div class="block" style="background-color: #222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div class="title"><strong>Add A Writer</strong></div>
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
                    <form class="form-horizontal"  method="POST" action="{{ url('admin/writer') }}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">writer Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name">
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
                        <label class="col-sm-3 form-control-label">writer facebook</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="facebook">
                        </div>
                      </div>
                       <div class="line"></div>
                         <div class="form-group row">
                        <label class="col-sm-3 form-control-label">writer twitter</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="twitter">
                        </div>
                      </div>
                       <div class="line"></div>
                         <div class="form-group row">
                        <label class="col-sm-3 form-control-label">writer Wiki</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="wiki">
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
