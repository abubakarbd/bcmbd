<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Broadband Client Management</title>
  </head>
  <body>
    <div class="container-fluid bg-light">
        <div class="container">
  <!-- Content here -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">BCM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Back</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>

<div class="container-fluid">
        <div class="container">

<div class="jumbotron">
  <h1 class="display-4">Broadband Client Management ‍Software</h1>
  <hr class="my-4">
  <p>এই সফটওয়্যার দিয়ে আপনি আপনার ক্লাইন্ট এর সকল তথ্য যুক্ত করতে পারবেন। বিল ম্যানদের তথ্য যুক্ত করতে পারবেন। একই সাথে মাসিক ও বাৎসরিক হিসেব রাখতে পারবেন। </p>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">সুবিধা সমূহ</h5>
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ক্লাইন্ট
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">গ্রাহক সুবিধা</h5>
        <p class="card-text">
          <ul class="list-group">
          <li class="list-group-item">০১। গ্রাহক তৈরি করা।</li>
          <li class="list-group-item">০২। গ্রাহকের তথ্য এডিট করা।</li>
          <li class="list-group-item">০৩। গ্রাহক অ্যাক্টিভ/ইনঅ্যাক্টিভ। </li>
          <li class="list-group-item">০৪। গ্রাহক ডিলিট করা।</li>
          <li class="list-group-item">০৫। গ্রাহকের বিল গ্রহন।</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="col-md-8">
      <img src="{{ asset('/') }}img/c1.png" class="card-img" alt="...">
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          বিলার ম্যান
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
                <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">বিলার ম্যান সুবিধা</h5>
        <p class="card-text">
          <ul class="list-group">
          <li class="list-group-item">০১। বিলার ম্যান তৈরি করা।</li>
          <li class="list-group-item">০২। বিলার ম্যানের তথ্য এডিট করা।</li>
          <li class="list-group-item">০৩। বিলার ম্যান অ্যাক্টিভ/ইনঅ্যাক্টিভ। </li>
          <li class="list-group-item">০৪। বিলার ম্যান ডিলিট করা।</li>
          <li class="list-group-item">০৫। গ্রাহকের বিল আদায়।</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="col-md-8">
      <img src="{{ asset('/') }}img/bm.png" class="card-img" alt="...">
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          বিল আদায় রেপট
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <div class="card-body">
        <h5 class="card-title">বিলার ম্যান সুবিধা</h5>
        <p class="card-text">
          <ul class="list-group">
          <li class="list-group-item">০১। গ্রাহকের বিল আদায়।</li>
          <li class="list-group-item">০২। মাসিক রেপট দেখা।</li>
          <li class="list-group-item">০৩। বিল DUE/PAID তালিকা দেখা। </li>
        </ul>
        </p>
      </div>
    </div>
    <div class="col-md-8">
      <img src="{{ asset('/') }}img/bs.png" class="card-img" alt="...">
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
        </div>
    </div>

    <div class="container-fluid bg-dark">
        <div class="container">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>