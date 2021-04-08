@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12" style="margin-top:20px;">
                <div class="block margin-bottom-sm" style="background-color:#222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-weight: bolder;">
                  <div class="title"><strong>Directors</strong><a href="/admin/actor/create"><button style="background-color:green;color:#fff;margin-left: 30px;" type="submit" class="btn">Create A Actor</button></a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>

                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Born</th>
                          <th>Birth Name</th>
                          <th>Nicknames</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach ($actor as $actr)
                        <tr>
                          <th scope="row">{{$actr->id}}</th>
                          <td>{{$actr->name}}</td>
                          <td><img width="60px" height="60px;" src="{{asset('images/actor/'.$actr->image)}}"></td>
                          <td style="text-align: justify;">{{ substr($actr->desc,0,220)}}</td>
                          <td>{{$actr->born}}</td>
                          <td>{{$actr->birth_name}}</td>
                          <td>{{$actr->nick_name}}</td>
                          <th><a href="/admin/actor/{{$actr->id}}/edit"><button style="background-color:darkorange;color:#fff;" type="button" class="btn">Edit</button></a></th>
                          <th>

                           <form method="POST" action="/admin/actor/{{ $actr->id }}">
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
                  <hr>
                   <div style="margin-left: 45%">
                  {{$actor->links()}}
                </div>
                </div>
              </div>
@endsection
