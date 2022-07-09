
  @extends('layouts.app')

   @section('content')
<head>
      <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css">

</head>

<style type="text/css">
   
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");
     font-family: Raleway, sans-serif;


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0; 
    font-family: Raleway, sans-serif;
}

body {
    background: linear-gradient(90deg, teal,yellow);            
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.screen {       
    background: linear-gradient(90deg, teal, yellow);            
    position: relative; 
    height: 600px;
    width: 360px;   
    box-shadow: 0px 0px 24px teal;
}

.screen__content {
    z-index: 1;
    position: relative; 
    height: 100%;
}
.screen__background {       
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    -webkit-clip-path: inset(0 0 0 0);
    clip-path: inset(0 0 0 0);  
}

.screen__background__shape {
    transform: rotate(45deg);
    position: absolute;
}

.screen__background__shape1 {
    height: 520px;
    width: 520px;
    background: #FFF;   
    top: -50px;
    right: 120px;   
    border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
    height: 220px;
    width: 220px;
    background: teal;      
    top: -172px;
    right: 0;   
    border-radius: 32px;
}

.screen__background__shape3 {
    height: 540px;
    width: 190px;
   background: linear-gradient(270deg, teal, teal);
    top: -24px;
    right: 0;   
    border-radius: 32px;
}

.screen__background__shape4 {
    height: 400px;
    width: 200px;
    background: teal;      
    top: 420px;
    right: 50px;    
    border-radius: 60px;
}

.login {
    width: 320px;
    padding: 30px;
    padding-top: 50     px;
}

.login__field {
    padding: 20px 0px;  
    position: relative; 
}

.login__icon {
    position: absolute;
    top: 30px;
    color: teal;
}

.login__input {
    border: none;
    border-bottom: 2px solid #D1D1D4;
    background: none;
    padding: 10px;
    padding-left: 24px;
    font-weight: 700;
    width: 75%;
    transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
    outline: none;
    border-bottom-color: teal;
}

.login__submit {
    background: #fff;
    font-size: 14px;
    margin-top: 30px;
    padding: 16px 20px;
    border-radius: 26px;
    border: 1px solid #D4D3E8;
    text-transform: uppercase;
    font-weight: 700;
    display: flex;
    align-items: center;
    width: 100%;
    color: teal;
    box-shadow: 0px 2px 2px #5C5696;
    cursor: pointer;
    transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
    border-color: teal;
    outline: none;
}

.button__icon {
    font-size: 24px;
    margin-left: auto;
    color: teal;
}

.social-login { 
    position: absolute;
    height: 140px;
    width: 160px;
    text-align: center;
    bottom: 0px;
    right: 0px;
    color: #fff;
}

.social-icons {
    display: flex;
    align-items: center;
    justify-content: center;
}

.social-login__icon {
    padding: 20px 10px;
    color: #fff;
    text-decoration: none;  
    text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
    transform: scale(1.5);  
}

.link {
    font-weight: 400;
    color: white;
    border-radius: 0;
}
.nav-link {
    font-weight: 400;
    color: black;
    border-radius: 0;
}
</style>

<div class="container">
    <div class="screen" >
        <div class="screen__content">
            <div  align="center" style="padding-top: 30px">
                <img src="{{ asset('images\bg-01.PNG')}}" width="100px" >
            </div>
            <form class="login" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login__field" data-validate = "Enter email">
                    <i class="login__icon fas fa-user"></i>
                    <input type="email" class="login__input" name="email"  value="{{ old('email') }}" required autocomplete="email" placeholder="User name / Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login__field" data-validate="Enter password">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" name="password"  placeholder="Password"  required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="button login__submit" type="submit">
                    <span class="button__text">Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>         
            </form>
           <!--  <div class="social-login">
                <h> 
                    @if (Route::has('password.request'))
                        <a class="link" class="container" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif     
                </h> -->
                  <div class="row">
                    <div class="col-md-6">
                        @if (Route::has('password.request'))
                        <a  class="nav-link"  href="{{ route('password.request') }}"/>
                            {{ __('Forgot Password?') }}   
                        </a>
                        @endif 
                    </div>
                    <div class="col-md-6" align="right">
                        <a  class="nav-link" href="{{url('register')}}">Register</a>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>      
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>      
    </div>
</div>

        <div id="dropDownSelect1"></div>

       