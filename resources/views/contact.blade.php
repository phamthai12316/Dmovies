@extends('layouts.theme')
@section('title', 'Dark Movies')
@section('content')
        <section class="clean-block clean-form dark" style="background-color:#282828;height:auto;padding-bottom:0px;">
            <div class="row" style="margin-right:0px;margin-left:0px;">
                <div class="col" style="padding-top:10px;padding-bottom:15px;padding-left:40px;padding-right:40px;height:auto;">
                    <section class="clean-block clean-form dark" style="background-color:rgb(40,40,40);padding-bottom:70px;">
                        <div class="container">
                   @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
                  @endif
                  @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>

                </div>
                  @endif
                            <div class="block-heading" style="font-family:Amiri, serif;padding-top:60px;"><i class="fas fa-comments" data-bs-hover-animate="tada" style="font-size:49px;color:rgb(255,255,255);"></i>
                                <h2 class="text-info">Contact Us</h2>
                                <p style="color:rgb(255,255,255);font-family:Alike, serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                            </div>
                            <form method="POST" action="{{url('contact/send')}}">
                                @csrf
                                <div class="form-group"><label style="font-size:20px;font-family:'Abhaya Libre', serif;">Name</label><input class="form-control" name="name" type="text" ></div>
                                <div class="form-group"><label style="font-size:20px;font-family:'Abhaya Libre', serif;">Subject</label><input class="form-control" name="subject" type="text"></div>
                                <div class="form-group"><label style="font-size:20px;font-family:'Abhaya Libre', serif;">Email</label><input class="form-control" name="email" type="text" ></div>
                                <div class="form-group"><label style="font-family:'Abhaya Libre', serif;font-size:21px;">Message</label><textarea name="message" class="form-control"></textarea></div>
                                <div class="form-group"><br><button class="button" type="send" name="send" value="send" type="button" style="font-family:'Abhaya Libre', serif;font-size:25px;margin-left: 30%;margin-right: 30%;">Send</button></div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <div class="row" style="background-color:#000000;margin-right:0px;margin-left:0px;">
            <div class="col" style="background-color:#000000;height:45px;"></div>
        </div>
@endsection
