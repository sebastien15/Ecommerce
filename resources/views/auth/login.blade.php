<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin |Log in User | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
        #body{
            background-color: cyan;
            background-image: url({{asset('backend/images/full-screen-image-3.jpg')}});
        }
        #logInForm {
            marging-top: 30px;

        }
        #LogInbutton{
            margin-top: 20px;

        }
      #rcorners1 {
        margin-top: 10%;
        border-radius: 10px;
        background: #73AD21;
        background-color: transparent;
        box-shadow: 3px 3px 2.5px 2.5px black;
        padding: 30px;
        padding-top: 17px;
        padding-bottom: 17px;"
        
      }
      #remember{
        color: rgb(165, 255, 237);
      }
      #ForgotPassword{
        color: rgb(165, 255, 237);
      }

    </style>
</head>
<body id="body" >
       
       <form id="rcorners1" method="POST" action="{{ route('login') }}" class="form-horizontal col-lg-4 col-md-4 col-sm-4 col-sm-offset-4 col-lg-offset-4 col-md-offset-4 ">
                        @csrf

                        <div class="form-group row">
                           <div>
                             <label for="email" class="text-left">{{ __('E-Mail Address') }}</label>  
                           </div>
                            

                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div>
                              <label for="password" class="text-left">{{ __('Password') }}</label>  
                            </div>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: white;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        
                                <button id="LogInbutton" type="submit" class="btn btn-primary form-control">
                                    {{ __('Login') }}
                                </button>

                                <a id="ForgotPassword" class="btn btn-link " href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            
                        </div>
                    </form>




       <!--scripts starts -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!--scripts ends -->
</body>
</html>
