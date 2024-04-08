<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('CSS/select.css')}}">
    <script src="JS/select.js"></script>
</head>
<body>
    
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <div class="logo">
        <p>dribble</p>
    </div>
    <form action="{{ route('selectpost') }}" method="post">
        @csrf
    <section>
    <div class="profile-card">
        <div class="header">
            <h1>What brings you to Dribble</h1>
        </div>
        <div class="sub-head">
            <p>Select options that best describes you.Don't worry you can  explore other option later</p>
        </div>
        <div class="cards-collection">
<div class="cards">
<div class="card-re">
    <div class="card" >
    <div class="all-card">
<div class="card-image"
>
<img src="card1.jpg" alt="" srcset="" style=" height:80%;">
</div>
<div class="dis">
    <h2>I'm a designer looking to sahre my work</h2>
</div>
<label class="container">
  <input type="checkbox" id="check">
  <span class="checkmark" ></span>
</label>
</div>   </div></div>
<div class="card-re">
<div class="card2" >
    <div class="all-card">
<div class="card-image"
>
<img src="card1.png" alt="" srcset="" style="  height:80%; width:99%;">
</div>
<div class="dis">
    <h2>I'm looking to hire a designer</h2>
</div>
<label class="container">
  <input type="checkbox" id="check2">
  <span class="checkmark"></span>
</label>
</div>   </div></div>
<div class="card-re">
<div class="card3" >
    <div class="all-card">
<div class="card-image"
>
<img src="card3.png" alt="" srcset="" style=" height:80%;">
</div>
<div class="dis">
    <h2>I'm looking for design inspiration</h2>
</div>
<label class="container">
  <input type="checkbox" id="check3">
  <span class="checkmark"></span>
</label>
</div>   </div>
        </div></div>
    </div>
  <div class="button">
    <div class="mask"></div>
    <button>Finish</button>
  </div>
    </section>
    </form>
</body>

</html>