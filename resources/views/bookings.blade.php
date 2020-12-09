<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Bookings</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Fjalla+One&family=Patua+One&display=swap" rel="stylesheet">
      
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      
  <header class="masthead mb-auto pb-5 ">
    <div class="inner">
      <h3 class="masthead-brand">Infrastructure</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link " href="/">Home</a>
        <a class="nav-link def active" href="/bookings" >bookings</a>
        <a class="nav-link" href="/dashboard">dashboard</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    
    
    <div id="booking" class="section">
      <!-- <div class="section-center"> -->
        <div class="container">
          <div class="row">
            <div class="booking-form">
               <div class="form-header"> 
                <h1 class="ml9">
                  Make Your Reservation
                </h1>
                
                
               
              </div>
              
              <form method="get" action="/event">
              @csrf
              <div class="col-md-12">
                <div class="form-group">
                
                       <select class="form-control curved-effect" id="hallname" name="hallname">
                        
                  <option  disabled selected hidden >Please choose Hall Name</option>
                 <option>Sadananda Open Air Auditorium</option>
                 <option>Sambhram Auditorium</option>
                 <option >Shambhavi Auditorium</option>
                 <option>Phalguni Seminar Hall</option>
                 <option>Sowparnika Seminar Hall</option>
                </select>
  
    </div>
    </div>    
              <!--  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="date" required>
                      <span class="form-label">Check In</span>
                    </div>
                  </div>-->
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="date" id="date"name="date" required>
                      <span class="form-label">event date</span>
                    </div>
                  </div>
                

                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" id="eventname" name="eventname" placeholder="Enter Event Name" required>
                    </div>
    </div>
    
    <div class="col-md-12 ">
                    <div class="form-group">
                      <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
    </div>
    <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" id="phonenumber" name="phonenumber"pattern="[7-9]{1}[0-9]{9}" placeholder="Enter Phonenumber" required>
                    </div>
    </div>
    
                <div class="form-btn">
                  <button class="submit-btn" type="submit">check for availability</button>
                </div>
              </form>
              
              
           </div>
          </div>
        </div>
      </div>
     <!-- </div>  -->
    
    </main>
  <!--<script src="user.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <!--<script type="text/javascript" src="{{ asset('js/bookings.js') }}"></script>-->
  <!-- <footer class="container">  -->
   
   
</body>
<footer class="container">
  
  <!-- <p class="float-right" style="padding-top: 20px;"><a href="#">Back to top</a></p> -->
  <p class="float-left" style="padding-top: 20px;">&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</html>
