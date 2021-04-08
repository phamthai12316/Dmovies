@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12" style="margin-top:20px;">
                <div class="block margin-bottom-sm" style="background-color:#222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-weight: bolder;">
                  <div class="title"><strong>Movies</strong><a href="/admin/movies/create"><button style="background-color:green;color:#fff;margin-left: 30px;" type="submit" class="btn">Create A Movie</button></a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>

                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Poster</th>
                          <th>Director</th>
                          <th>Writer</th>
                          <th>Actor</th>
                          <th>Actress</th>
                          <th>Genre</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach ($movies as $movie)
                        <tr>
                          <th scope="row">{{$movie->id}}</th>
                          <td>{{$movie->name}}</td>
                          <td><img width="60px" height="60px;" src="{{asset('images/poster/'.$movie->poster)}}"></td>
                          <td>{{$movie->director->name}}</td>
                          <td>{{$movie->writer->name}}</td>
                          <td>{{$movie->actor->name}}</td>
                          <td>{{$movie->actress->name}}</td>
                          <td>{{$movie->genre->name}}</td>
                          <th><a href="/admin/movies/{{$movie->id}}/edit"><button style="background-color:darkorange;color:#fff;" type="button" class="btn">Edit</button></a></th>
                          <th>

                           <form method="POST" action="/admin/movies/{{ $movie->id }}">
                                         {{ method_field('DELETE') }}
                                                         {{ csrf_field() }}

                          	<button style="background-color:red;color:#fff;" type="submit" class="btn">Delete</button>
                          	</form>
                          </th>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                  </div>
                </div>
                 <div style="margin-left:45%">
                  {{$movies->links()}}
                </div>
              </div>
@endsection
