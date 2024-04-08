<body>
    <h1>Hello, {{Auth::user()->name}}</h1>
    <p>Welcome to Dribble Please click the link below to verify your email:</p>
 <a href="{{ route('verifyemail', ['token' => $user->verification_token]) }}">   <button>Verify Email</button></a>

</body>
