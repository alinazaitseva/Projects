@extends ('layouts.app')
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
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <img src="images/about_me.png" class="aboutme">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <p class="ukrainian">...an Ukrainian web developer in a job searching</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="images/Alina.png" class="alinaphoto">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p class="whiteabout">Some words about myself :)<br><br>
                    I am a student of IT-Academy. I am a sociable, diligent, fast learner and love working in a team. I always try to avoid conflicts and accept criticism well. For the moment I am in search of work and new impressions/<br><br>
                    Let's socialize!</p>
                <a href="http://qoo.by/2fWP" target="_blank"><img src="images/telegram-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWQ" target="_blank"><img src="images/skype-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWR" target="_blank"><img src="images/slack-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWS" target="_blank"><img src="images/github-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWT" target="_blank"><img src="images/google-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWU" target="_blank"><img src="images/linkedin-icon.png" class="socialbutton margin-left10"></a>
                <a href="http://qoo.by/2fWV" target="_blank"><img src="images/facebook-icon.png" class="socialbutton margin-left10"></a>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <p class="per-inf"><img src="images/name_pic.png" class="introduct">&nbsp;&nbsp;&nbsp;
                    Zaitseva Alina
                </p>
                <p class="per-inf"><img src="images/age_pic.png" class="introduct">&nbsp;&nbsp;
                    25
                </p>
                <p class="per-inf"><img src="images/birth_place.png" class="introduct">&nbsp;&nbsp;&nbsp;
                    Ukraine, Vinnitsa
                </p>
                <p class="per-inf"><img src="images/address_pic.png" class="introduct">&nbsp;
                    Andriy Pervozvannyi Str. 60/108
                </p>
                <p class="per-inf"><img src="images/e-mail_pic.png" class="introduct">&nbsp;&nbsp;
                    1823345@gmail.com
                </p>
                <p class="per-inf"><img src="images/phone_pic.png" class="introduct">&nbsp;&nbsp;
                    +380 93 856 30 52
                </p>
                <p class="per-inf"><img src="images/freelance_pic.png" class="introduct">&nbsp;&nbsp;
                    Available
                </p>
            </div>
        </div>
    </div>
@endsection