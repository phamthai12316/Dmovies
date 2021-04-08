@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12" style="margin-top:20px;">
                <div class="block margin-bottom-sm" style="background-color:#222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-weight: bolder;">
                  <div class="title"><strong>Writers</strong><a href="/admin/writer/create"><button style="background-color:green;color:#fff;margin-left: 30px;" type="submit" class="btn">Create A Writer</button></a>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>

                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Facebook</th>
                          <th>twitter</th>
                          <th>Wiki</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach ($writers as $writer)
                        <tr>
                          <th scope="row">{{$writer->id}}</th>
                          <td>{{$writer->name}}</td>
                          <td><img width="60px" height="60px;" src="{{asset('images/writer/'.$writer->image)}}"></td>
                          <td style="text-align: justify;">{{ substr($writer->desc,0,300)}}</td>
                          <td>{{$writer->facebook}}</td>
                          <td>{{$writer->twitter}}</td>
                          <td>{{$writer->wiki}}</td>
                          <th><a href="/admin/writer/{{$writer->id}}/edit"><button style="background-color:darkorange;color:#fff;" type="button" class="btn">Edit</button></a></th>
                          <th>

                           <form method="POST" action="/admin/writer/{{ $writer->id }}">
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
                  {{$writers->links()}}
                </div>
                </div>
              </div>
@endsection
