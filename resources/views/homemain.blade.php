<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/home.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="menu-phone"> 
<div class="menu">
<div class="item">
    <div>Inspiration</div>
    <div>Find Work</div>
    <div>Learn design</div>
    <div>Go pro</div>
    <div>Hire Designers</div>
</div>
</div>
<div class="icon">
<i class="fa fa-sort-desc"></i>
</div>

</div>
   
    <div class="top">
    <div class="logo">
        dribble
    </div>
<menu>
    <div class="menu-items">
        <span>Inspiration</span>
        <span>Find Work</span>
        <span>Learn design</span>
        <span>Go pro</span>
        <span>Hire Designers</span>
</div>
</menu>

<div class="top-end">
    <div class="items">
        <div class="input">
            <span class="s-icon"><i class="material-icons">search</i></span>
        <input type="text" name="" id="" placeholder="search.."></div>
        <div class="bag">
    <i class="material-icons">work</i>
    </div>
    @if(Auth::user()->image)
    <div class="profile">
        <img src="{{ asset('profiles/' . Auth::user()->image) }}" alt="Profile Image">
    </div>
@endif

    <div class="upload">
    <button >
        upload
    </button></div>
    </div>
   
</div>
</div>

<section>
 


<h1 style="font-family:inter; font-size:30px; width:100%    text-align:center;">
  Congratulation you have done your verification
</h1>



</section>
<div class="bottom">
    <div class="bottom-items">
    <div class="item">
<div class="logo">
dribble</div>
<div class="dribble">
dribble is the
world's leading community to creative share, grow,
and get hired
</div>

<div class="logos">
<i class="fa fa-facebook-official"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-pinterest"></i>
<i class="fa fa-twitter"></i>
</div>
    </div>
    <div class="item">
        <div class="head">
            <h3>For designers</h3>
        </div>
        <p>Go pro!</p>
        <p>Explore</p>
        <p>Design blog</p>
        <p>Overtime prodcast</p>
        <p>Playoffs</p>
        <p>Weekly Warm-Up</p>
        <p>Refer a Friend</p>
        <p>Code of conduct</p>
        </div>
        <div class="item">
        <div class="head">
            <h3>Hire designers</h3>
        </div>
        <p>Post a job opening</p>
        <p>Post a freelance<br> project</p>
    <p>Search for designers</p>
       
        <div class="head">
            <h3>Brands</h3>
        </div>
        <p>Advertise with us</p>
        </div>
        
        <div class="item">
        <div class="head">
            <h3>Company</h3>
        </div>
        <p>About</p>
        <p>Careers</p>
        <p>Support</p>
        <p>Madia kit</p>
        <p>Testimonials</p>
        <p>Api</p>
        <p>Terms of services</p>
        <p>Privacy policy</p>
        <p>Cookie policy</p>
      
        </div>
        <div class="item">
        <div class="head">
            <h3>Directories</h3>
        </div>
        <p>Design jobs</p>
        <p>Design for hire</p>
        <p>Freelance designers for hire</p>
        <p>Tags</p>
        <p>Places</p>
        <div class="head">
            <h3>Design assets</h3>
        </div>
        <p>Dribble Marketplaces</p>
        <p>Creative Market</p>
        <p>Fontspring</p>
        <p>Font squirrel</p>
        </div>
        <div class="item">
        <div class="head">
            <h3>Design Resources</h3>
        </div>
        <p>Freelancing</p>
        <p>Design Hiring</p>
        <p>Design Portfolio</p>
        <p>Design Education</p>
        <p>Testimonials</p>
        <p>Creative Process</p>
        <p>Design industry Trends</p>
     
        </div>
    
    </div>
        
       
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var icon = document.querySelector(".icon");
    var menuPhone = document.querySelector(".menu-phone .menu");
    var menuTop = document.querySelector(".top menu");

    icon.onclick = function() {
        if (window.innerWidth <= 1050) {
            menuPhone.classList.toggle('active');
        } else {
            menuTop.classList.toggle('active');
        }
    }
});




</script>
</body>
</html>