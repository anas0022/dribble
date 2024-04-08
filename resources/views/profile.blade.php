<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/profile.css') }}">
    <script src="profile.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


<div class="logo">
    <p>dribble</p>
</div>
<section>
    
<form action="{{ route('profilepost') }}" method="post" class="profile-card" enctype="multipart/form-data">

        @csrf
        <div class="profile-header">
            <h1>Welcome! Lets Create Your Profile</h1>
            <p>Let Others Get To know You better! You can do this later</p>
        </div>
        <div class="add-head">
            <h3>Add an avatar</h3>
        </div>
        <div class="profile-image">
    <span class="p-circle">
            <div class="image" id="img">
                <i style="font-size:24px" class="fa">&#xf083;</i>
            </div></span>
         
            <div class="image2" >
    </div>
   

            <div class="image-selecter">
                <div class="image-input">
            <input type="file" name="image" id="choose" onchange="getImagePreview(event)"></div>
                <p><span>> </span>Or choose one of our default</p>
            </div>
        </div>
        <div class="add-location">
            <h3>Add your location</h3>
            <div class="input" id="input">
                <input type="text" name="location" id="location" placeholder="Enter A Location">
          
            </div>
           
  
   
   
            <div class="button">
            <div class="button">
                <div   id="mask"></div>
    <button class="location" id="submitButton" disabled>Next</button>
</div>

            </div>
        </div>
    </form>
</section>
<script>
    document.getElementById("location").addEventListener("input", function() {
        var locationInput = document.getElementById("location").value.trim();
        var submitButton = document.getElementById("submitButton");
        var mask = document.getElementById("mask"); // Corrected
        if (locationInput !== "") {
            submitButton.disabled = false;
            mask.style.display = "none";
        } else {
            submitButton.disabled = true;
            mask.style.display = "block";
        }
    });
    function getImagePreview(event) {
    var image = URL.createObjectURL(event.target.files[0]);
    var newimg = document.createElement('img');
    newimg.src = image;

    // Apply relevant styles to the new image element
    newimg.style.width = '100%'; // Example width
    newimg.style.height = '100%'; // Example height
    newimg.style.position = 'absolute';
    newimg.style.borderRadius = '50%';
    // Get the span element with class "p-circle"
    var pCircleSpan = document.querySelector('.image');

    // Append the new image element inside the span
    pCircleSpan.appendChild(newimg);
}




</script>




</body>
</html>
