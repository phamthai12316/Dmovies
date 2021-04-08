@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12">
                <div class="block" style="background-color: #222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <div class="title"><strong>Edit Movie</strong></div>
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
                    <form class="form-horizontal"  method="POST" action="/admin/movies/{{ $movie->id }}" enctype="multipart/form-data">
                    	  {{ method_field('PATCH') }}
                           {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Title</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="{{$movie->name}}">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Director</label>
                        <div class="col-sm-9">

                          <select name="director_id" class="form-control mb-3 mb-3" >
                          	@foreach($director as $dir)
                            <option value="{{$dir->id}}">{{$dir->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                        <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Writer</label>
                        <div class="col-sm-9">
                          <select name="writer_id" class="form-control mb-3 mb-3">
                          	@foreach($writer as $wr)
                            <option value="{{$wr->id}}">{{$wr->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Actor</label>
                        <div class="col-sm-9">
                          <select name="actor_id" class="form-control mb-3 mb-3">
                            @foreach($actor as $act)
                            <option value="{{$act->id}}">{{$act->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Actress</label>
                        <div class="col-sm-9">
                          <select name="actress_id" class="form-control mb-3 mb-3">
                            @foreach($actress as $acts)
                            <option value="{{$acts->id}}">{{$acts->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Genres</label>
                        <div class="col-sm-9">
                          <select name="genre_id" class="form-control mb-3 mb-3">
                            @foreach($genre as $gen)
                            <option value="{{$gen->id}}">{{$gen->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                        <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Year</label>
                        <div class="col-sm-9">
                          <select name="year_id" class="form-control mb-3 mb-3">
                            @foreach($year as $yr)
                            <option value="{{$yr->id}}">{{$yr->name}}</option>
                            @endforeach
                          </select>
                        </div></div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Poster</label>
                        <div class="col-sm-9">
                        <img width="150px" height="150px" src="{{asset('/images/poster/'.$movie->poster)}}">
                            <input type="file" name="poster" class="form-control">

                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Cover</label>
                        <div class="col-sm-9">
                        	<img width="150px" height="150px" src="{{asset('/images/cover/'.$movie->cover)}}">
                          <input type="file" name="cover" class="form-control">
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Cast</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="cast" value="{{$movie->cast}}">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Link</label>
                        <div class="col-sm-9">
                          <input type="text" name="video_link" class="form-control" value="{{$movie->video_link}}" >
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Keywords</label>
                        <div class="col-sm-9">
                          <input type="text" name="keywd" class="form-control" value="{{$movie->keywd}}" >
                        </div>
                      </div>
                       <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="desc" id="exampleFormControlTextarea5" rows="4" >{{$movie->desc}}</textarea>
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
