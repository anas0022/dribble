<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/welcome.css')}}">
    <script src="JS/welcome.js"></script>
</head>
<body >
    <section>
        <div class="home" style="background:url('{{asset('Picsart_24-04-02_12-34-27-844.jpg')}}');
background-position:center;
 background-size:cover;
background-repeat: no-repeat;
   ">
<div class="top">
    
    <div class="buttons">
   
     <p id="login">Login</p>
   <button id="register" >Sign up</button>
    </div>
</div>   
<div class="logo">
        <p>dribble</p>
    </div>
<div class="header">
    <p>Discover the worlds top Designers & Creatives </p>
</div>
</div>
<div class="singup-login">
<div class="singnup">
<div class="login-msg">
    <p>Already a member?<a>sign in</a></p>

</div>
@if($errors->has('name'))
                <span >*{{$errors->first('name')}}</span>
              @endif
              @if($errors->has('email'))
                <span >*{{$errors->first('email')}}</span>
              @endif
              @if($errors->has('username'))
                <span >*{{$errors->first('username')}}</span>
              @endif
              @if($errors->has('password'))
                <span >*{{$errors->first('password')}}</span>
              @endif
<div class="form">
<form action="{{ route('signup') }}" method="post">
        @csrf
        <div class="header-form">
    <h1>Sign up to Dribble</h1></div>
    <div class="name">
        
        <div class="items"> 
            
    <div class="n">
   
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            @if($errors->has('name'))
                <span style="width:120%; color:red; display:flex;">*{{$errors->first('name')}}</span>
              @endif</div>
            
            <div class="n">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            @if($errors->has('username'))
                <span style="width:180%; color:red; display:flex;">*{{$errors->first('username')}}</span>
              @endif</div>
        </div>
    </div>
    <div class="email">
        <div class="items">
            <div class="e">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
        </div>
    </div>
    <div class="password">
        <div class="items">
            <div class="p">
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass">
            </div>
        </div>
    </div>
    <div class="privacy">
        <div class="items">
            <input type="checkbox" name="check" id="check">
            @if($errors->has('check'))
                <span >*{{$errors->first('check')}}</span>
              @endif
            <label for="check">Creating accout means you're okey with our <span>Terms of service, privacy policy</span> and our default
            <span>Notification Settings</span> </label>
        </div>
    </div>
    <div class="create-account">
        <div class="button">
   <button>create Account</button></div>
    </div>
    
    </form>
</div>

</div>
<div class="login">
<div class="login-msg">
    <p>Don't Have Account?<a>sign up</a></p>

</div>
<div class="form2">
    <form >
       
        <div class="header-form">
    <h1>Sign in to Dribble</h1></div>
   
    <div class="email">
        <div class="items">
            <div class="e">
                <label for="email">Email</label>
                <input type="email" name="" id="email">
            </div>
        </div>
    </div>
    <div class="password">
        <div class="items">
            <div class="p">
                <label for="pass">Password</label>
                <input type="password" name="" id="pass">
            </div>
        </div>
    </div>
   
    <div class="create-account">
        <div class="button">
   <button>Login</button></div>
    </div>
    </form>
</div>
</div>
</div>
    </section>
</body>
</html>
