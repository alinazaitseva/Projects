@extends('layouts.app')
@section('content')
    <div class="container blackblock">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pinkup">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pcenter">
                    <img class="homeimage" src="images/hom.png">
                    <a href="{{url('/about')}}">
                        <p class="hometext">ABOUT ME</p>
                    </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pcenter">
                    <img class="homeimage" src="images/user.png">
                    <a href="{{url('/resume')}}">
                        <p class="hometext">RESUME</p>
                    </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pcenter">
                    <img class="homeimage" src="images/briefcase.png">
                    <a href="{{url('/contact')}}">
                        <p class="hometext">CONTACT</p>
                    </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pcenter">
                    <img class="homeimage" src="images/briefcase.png">
                    <a href="#">
                        <p class="hometext">PORTFOLIO</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p class="zaitseva">Zaitseva Alina</p>
                <span class="developer">web developer</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 marg-l60">
                <img src="images/contact_pic.png" class="aboutme">
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <p class="cont-f"> Where am I in this world? </p>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <p class=" drop cont-hobie"> Drop me a line! </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83366.23577019206!2d28.39942206224894!3d49.23479452469538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b65195a6489%3A0xcbd4e159eedd74fe!2z0JLQuNC90L3QuNGG0LAsINCS0LjQvdC90LjRhtC60LDRjyDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1491492065674" width="540" height="370" frameborder="0" style="border:1" allowfullscreen>
                </iframe>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <p class="cont-hobie">My hobbies</p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">English</span></p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">Studying</span></p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">Traveling</span></p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">Reading</span></p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">Programming</span></p>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf">Music</span></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                <img src="images/message_pic.png" class="down20">
                @if(Auth::guest())
                    <p class="cont-hobie">Push here for message me :)</p>
                    <a href="{{ url('/login') }}" class="btn-info btn sign">
                                    <span class="name-auth-batton">
                                    &nbsp;
                                     LOGIN
                                    &nbsp;
                                    </span>
                    </a>
                    <p class="cont-hobie" style="margin-top: 30px;">Or here for registration</p>
                    <a href="{{ url('/register') }}" class="btn-warning btn sign">
                                    <span class="name-auth-batton">
                                        REGISTER
                                    </span>
                    </a>
                @else
                    {{Form::open(array('route' => 'messages.store','method'=>'POST'))}}

                    <fieldset class="form-group">
                        {{Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control','style'=>'width:200px'))}}
                    </fieldset>
                    <fieldset class="form-group">
                        {{Form::textarea('description', null, array('placeholder' => 'Write something..','class' => 'form-control','style'=>'height:100px; resize: none '))}}
                    </fieldset>
                    {{Form::submit('SEND', ['class' => 'btn-success pull-right btn margin-top20'])}}
                    {{Form::close()}}
                @endif
            </div>
        </div>
    </div>
@endsection
