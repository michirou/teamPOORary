<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>temp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
       
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>

        <style>
            html, body {
                /*background-color: #fff;*/
                /*background-color: #FF7055;*/
                /*background-color: #FCB410;*/
                background-color: #1BA39C;
                /*color: #636b6f;*/
                color: #FFFFF7;
                font-family: 'Raleway', sans-serif;
                /*font-weight: 100;*/
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                /*color: #636b6f;*/
                color: #402E04;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .desc > span {
                /*color: #636b6f;*/
                color: #402E04;
                /*padding: 0 25px;*/
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                /*margin-bottom: 30px;*/
            }
        </style>

    </head>
    <!-- <body style="background-color: #FF7055; color: #FFFFF7;"> -->
    <body>
        <div class="flex-center position-ref full-height">
          <!--   @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

            <div class="content">
                <div class="title m-b-md">
                    <span>Leihen</span>
                </div>
                
                <div class="btn-options">
                    <div style="margin-top: 25%;"><a href="{{ route('login') }}" class="btn btn-login"><span>Login</span></a></div>
                    <div><a href="{{ route('register') }}" class="btn btn-register"><span>Register</span></a></div>
                    <!-- <div class="btn-login-holder">
                        <input type="button" class="btn btn-login" name="login" value="Login" onclick="login_func()" />
                    </div>
                    <div class="btn-signup-holder">
                        <input type="button" class="btn btn-signup" name="signup" value="Sign up" />
                    </div> -->
                </div>
            </div>
        </div>
    </body>
</html>
