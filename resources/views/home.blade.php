<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Carousel Template · Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Fjalla+One&family=Patua+One&display=swap" rel="stylesheet">
      




    <!-- Bootstrap core CSS -->

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand " href="#">Infrastructure</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">dashboard</a>
        </li>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn button my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  src="https://images.shiksha.com/mediadata/images/1586342687phpTL4ga5.jpeg">
        <div class="container">
          <div class="carousel-caption text-left">
            
            <h1>A better learning future starts here!</h1>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.menmamit.com/images/banner2.jpg" >
        <div class="container">
          <div class="carousel-caption">
            
            <h1>A place where students can achieve</h1>
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.nmamit.nitte.edu.in/img/home-admissions-right.jpg">
        <div class="container">
          <div class="carousel-caption text-right">
            
            <h1>A Journey to Excellence

            </h1>
           
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
    
  <div class="container marketing " >

   

    <!-- START THE FEATURETTES -->

    

    <div class="row featurette">
      <div class="col-md-7 ">
        <h2 class="featurette-heading">Sadananda Open Air Auditorium</h2>
        <p class="lead">
        <span class="sans">Location:</span> Behind Dr. NSAM First Grade College Building </br>
          <span class="sans">Seating capacity: </span> 5000 </br>
          <span class="sans">Facilities:</span></br>
          <i class="material-icons md-24">
            language
        </i>Internet Connection
          <i class="material-icons md-24">
            volume_up
           </i> Sound Systems,
         <i class="material-icons md-24">
             personal_video
         </i> Projector Screen</p>
        
      </div>
      <div class="col-md-5 "data-aos="zoom-in-up">
        <img src="{{ asset('images/image8.jpeg') }}"  class="img-fluid" >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Sambhram Auditorium</h2>
        <p class="lead">
          <span class="sans">Location:</span> Basement of Main Building</br>
          <span class="sans"> Seating Capacity:</span> 350</br>
          <span class="sans"> Facilities:</span> </br>
          
          <i class="material-icons md-24">
            ac_unit
        </i> Ac,
        <i class="material-icons md-24">
          language
      </i>Internet Connection
          <i class="material-icons md-24">
          volume_up
         </i> Sound Systems,
       <i class="material-icons md-24">
           personal_video
       </i> Projector Screen</p>
      </div>
      <div class="col-md-5 order-md-1"data-aos="zoom-in-up">
        <img src="{{ asset('images/image6.jpeg') }}" class="img-fluid" >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> Shambhavi Auditorium</h2>
        <p class="lead">
          <span class="sans">Location:</span> 1st Floor, Administrative Block</br>
          <span class="sans">Seating Capacity:</span> 150</br>
          <span class="sans">Facilities: </span></br> 
          <i class="material-icons md-24">
            wifi
          </i> Wi-FI ,
          <i class="material-icons md-24">
            ac_unit
        </i> Ac, <i class="material-icons md-24">
          computer</i> LAN,
          <i class="material-icons md-24">
          volume_up
         </i> Sound Systems,
       <i class="material-icons md-24">
           personal_video
       </i> Projector Screen
        </p>
      </div>
      <div class="col-md-5"data-aos="zoom-in-up">
        <img src="{{ asset('images/image7.jpeg') }}"class="img-fluid">
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Phalguni Seminar Hall</h2>
          <p class="lead">
            <span class="sans">Location:</span> 2nd Floor, Main Building</br>
            <span class="sans">Seating:</span> 100</br>
            <span class="sans">Facilities:</span> </br>
          <i class="material-icons md-24">
            wifi
          </i> Wi-FI ,
          <i class="material-icons md-24">
            ac_unit
        </i> Ac, <i class="material-icons md-24">
          computer</i> LAN,
          <i class="material-icons md-24">
          volume_up
         </i> Sound Systems,
       <i class="material-icons md-24">
           personal_video
       </i> Projector Screen
          </p>
        </div>
        <div class="col-md-5 order-md-1"data-aos="zoom-in-up">
          <img src="{{ asset('images/image3.jpeg') }}" class="img-fluid">
        </div>
      </div>
      <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Sowparnika Seminar Hall</h2>
        <p class="lead">
          <span class="sans">Location:</span> 1st Floor, Main Building</br>
          <span class="sans">Seating Capacity:</span> 100</br>
          <span class="sans">Facilities:</span> </br>
          <i class="material-icons md-24">
            wifi
          </i> Wi-FI ,
          <i class="material-icons md-24">
            ac_unit
        </i> Ac, <i class="material-icons md-24">
          computer</i> LAN,
          <i class="material-icons md-24">
          volume_up
         </i> Sound Systems,
       <i class="material-icons md-24">
           personal_video
       </i> Projector Screen
        </p>
      </div>
      <div class="col-md-5"data-aos="zoom-in-up"style="padding-bottom:30px;">
       <img src="https://nmamit.nitte.edu.in/img/facilities/auditorium/sowparnika-hall.jpg"  class="img-fluid">
      </div>
    </div>
    
    
    

    <!-- /END THE FEATURETTES -->

  <!-- /.container -->
  
              
               
  
</main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
  
  
</script>

  <!-- FOOTER -->
  <!--<footer class="container">
  
    <p class="float-right" style="padding-top: 40px;"><a href="#">Back to top</a></p>
    <p style="padding-top: 40px;">&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>-->
  <footer>
   
    
      <div class="col-md-auto col-sm-auto footer-list ">
        <h3 class="footer1" data-aos="fade-down">Contact
          <div></div>
        </h3>
        <address class="footer1"data-aos="fade-down">
  
          Nitte, Karkala Taluk,</br>
          Udupi - 574110</br>
          Karnataka, India</br>
        <br/>
        <strong>Phone :</strong>+91 – 8258 – 281263 / 281264 / 281248
        / 281461 / 281462 / 281463 / 281349
        +91 - 8258 - 281039<br/>
        <strong>E-mail :</strong> www.nmamit.nitte.edu.in
        </address>
        
      </div>
    </div>
    </div>
    
  </footer>

</html>