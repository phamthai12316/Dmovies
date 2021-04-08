@extends('admin.layout')
@section('title', 'Dark Movies')
@section('panel')
              <div class="col-lg-12" style="margin-top:20px;">
                <div class="block margin-bottom-sm" style="background-color:#222222;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-weight: bolder;">
                  <div class="title"><strong>Comments</strong>
</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>

                        <tr>
                          <th>Name</th>
                          <th>phone</th>
                          <th>Email</th>
                          <th>comment</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach ($comments as $comment)
                        <tr>

                          <td>{{$comment->firstname}}&nbsp;&nbsp;{{$comment->lastname}}</td>
                          <td>{{$comment->phone}}</td>
                          <td>{{$comment->email}}</td>
                          <td>{{$comment->comments}}</td>
                          @if($comment->movie_id)
                          <th><a href="/movie/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          @if($comment->director_id)
                          <th><a href="/director/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          @if($comment->actor_id)
                          <th><a href="/actor/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          @if($comment->actress_id)
                          <th><a href="/actress/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          @if($comment->writer_id)
                          <th><a href="/writer/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          @if($comment->blog_id)
                          <th><a href="/blog/posts/68{{$comment->id}}439"><button style="background-color:green;color:#fff;" type="button" class="btn">View</button></a></th>
                          @endif
                          <th><form method="POST" action="/admin/comments/{{ $comment->id }}">
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
                </div>
              </div>
@endsection
