@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
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
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <img src="images/resume_pic.png" class="resume">
            </div>
        </div>

        <!--   hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
        <div class="col-lg-12">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-left: 20px;">
                <img src="images/employment_pic.png" class="employ">
                <p class="per-inf margin-top20">
                    "VinnitsaBud" Ltd.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015 - Present
                </p>
                <p class="per-inf">
                    Engineer from project estimate business
                </p>
                <p class="per-inf margin-top20">
                    Web Agency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017 - Present
                </p>
                <p class="per-inf">
                    Web developer
                </p>
                <img src="images/education_pic.png" style="margin-left: 19px;">
                <p class="per-inf margin-top20">
                    VNTU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009-2014
                </p>
                <p class="per-inf">
                    Industrial and civil construction
                </p>
                <p class="per-inf margin-top20">
                    Web developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-2017
                </p>
                <p class="per-inf">
                    Vinnitsa IT-Academy
                </p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="images/dev_skills_pic.png">
                <div class="margin-top20">
                    <!-- <img src="images/gray_pic.png" class="margin-bot10"> -->
                    <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                        <span class="per-inf margin-top35">HTML</span></p>
                    <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                        <span class="per-inf margin-top35">CSS</span></p>
                    <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                        <span class="per-inf margin-top35">JavaScript</span></p>
                    <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                        <span class="per-inf margin-top35">PHP</span></p>
                    <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                        <span class="per-inf margin-top35">C</span></p>
                    <img src="images/framework_pic.png">
                </div>
                <p><img src="images/ic_contact_mail.png" class="marg-righ20">
                    <span class="per-inf margin-top35">Laravel</span></p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="images/regisret_pic.png">
                <div>
                    <img src="images/homer.png" class="margin-top35">
                </div>

                @if(Auth::guest())
                    <a href="{{ url('/login') }}" class="btn-success btn sign">
                            <span class="name-auth-batton">
                                LOGIN
                            </span>
                    </a>
                    <a href="{{ url('/register') }}" class="btn-success btn sign">
                            <span class="name-auth-batton">
                                REGISTER
                            </span>
                    </a>
                @else
                    <span class="cont-hobie margin-top35"> Hello {{ Auth::user()->name }} :)</span>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <p class="btn-info btn sign">
                            LOGOUT
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                @endif
            </div>
        </div>
    </div>
@endsection

