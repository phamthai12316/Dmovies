@extends('dmadmin.layout')
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
                    <form class="form-horizontal"  method="POST" action="/dmadmin/infos/{{ $infos->id }}" >
                    	  {{ method_field('PATCH') }}
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Addres</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="adrs" value="{{$infos->adrs}}">
                        </div>
                      </div>
                    
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Phone Number</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone" value="{{$infos->phone}}">
                        </div>
                      </div>
                   
                    <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="email" value="{{$infos->email}}">
                        </div>
                      </div>
                 
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Whatsapp</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="wtsp" value="{{$infos->wtsp}}">
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