<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSSprofile.css') }}">
    <script src="profile.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


<div class="logo">
    <p>dribble</p>
</div>
<section>
    
<form action="select" method="get" class="profile-card" enctype="multipart/form-data">

 
        <div class="profile-header">
            <h1>Welcome! Lets Create Your Profile</h1>
            <p>Let Others Get To know You better! You can do this later</p>
        </div>
        <div class="add-head">
            <h3>Add an avatar</h3>
        </div>
        <div class="profile-image">
   
          
            <div class="image" >
    <img src="{{ asset('profiles/' . Auth::user()->image) }}" alt="Profile Image" style="width:100%; height:100%; border-radius:50%;">  </div>
    
            <div class="image-selecter">
                <div class="image-input">
            <input type="file" name="image" id="choose" ></div>
                <p><span>> </span>Or choose one of our default</p>
            </div>
        </div>
        <div class="add-location">
            <h3> your location</h3>
           
          
  
    <div class="input">
    <i class="material-icons">place</i>  <input type="text" name="location" id="location" value="{{ Auth::user()->location }}">
          
           
    </div>

     
            <div class="button">
            <div class="button">
              
    <button class="location">Next</button>
</div>

            </div>
        </div>
    </form>
</section>





</body>
</html>
