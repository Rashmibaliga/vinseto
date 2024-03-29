<!doctype html>
<html lang="en">
  <head>
 
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Event Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    <link href="{{ asset('css/event.css') }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body class="text-center" >
  
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
   
  <header class="masthead mb-auto pb-5">
  
    <div class="inner">
    
      <h3 class="masthead-brand"><i class='fas fa-university' style='font-size:28px'></i> Visneto</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="/event">Event</a>
        <a class="nav-link" href="/dashboard">Dashboard</a>
        <a class="nav-link" href="/bookings">booking</a>
      </nav>
      </div>
      </header>
      <main role="main" class="inner cover">
      <!-- <div class="container"> -->
      <div id="booking" class="section">
      <!-- <div class="section-center"> -->
        <div class="container">
          <div class="row">
            <div class="booking-form">
              
      <form method="post" id="sectionForm"action="book">
    {{@csrf_field()}} 
    
    <div class="col-md-12">
  <div class="form-group">
  
   Hall Name
    <input type="text" name="hallname" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['hallname']; ?>" >
  </div>
    </div>
    
    <div class="col-md-12">
  <div class="form-group">
    Event date
    <input type="text" name="eventdate" class="form-control" id="exampleFormControlInput2" value="<?php echo $_GET['date']; ?>">
  </div>
    </div>
    
  <div class="col-md-12">
  <div class="form-group">
   Event Name
    <input type="text" name="eventname" class="form-control" id="exampleFormControlInput3" value="<?php echo $_GET['eventname']; ?>">
  </div>
    </div>
 
    <div class="col-md-12">
  <div class="form-group">
   Name
    <input type="text" name="name" class="form-control" id="exampleFormControlInput4" value="<?php echo $_GET['name']; ?>">
  </div>
    </div>
    <div class="col-md-12">
  <div class="form-group">
    Phone number
    <input type="text" name="phonenumber" class="form-control" id="exampleFormControlInput5" value="<?php echo $_GET['phonenumber']; ?>">
  </div>
    </div>
    
    <!-- <div class="col-md-12"> -->
  <div class="form-group">
  <p>Choose time slots</p>
  <div id="evdisable" >
  <div class="checkbox-group" required>
      <input type="checkbox" id="0" name="timeslot[]"  value="0" >9:00 - 10:00 
    </div>
    <div class="checkbox">
      <input type="checkbox" id="1" name="timeslot[]"  value="1" >11:00 - 12:00
    </div>
    <div class="checkbox disabled">
      <input type="checkbox" id="2" name="timeslot[]" value="2" >1:00 - 2:00
    </div>
    </div>
                      </div>
    
    
                      <div class="form-group">
                      <button id="btnBook"  value="Submit"class="btn btn-primary btn-sm submit-btn">book now</button>
                      </div>
  
   </form>
    
    </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
    </main>
    

 

 

@php

if(count($sendEventBook)>0)
{

 
$i=count($sendEventBook);
$m=0;
for($k=0;$k<=$i;$k++,$i--)
{
  
 $pieces= explode(",", $sendEventBook[$k]);
  $j=count($pieces);
 
 for($s=0;$s<=$j;$s++,$j--)
 {
     $pieces[$s];
     echo "<script> 
      
  document.getElementById($pieces[$s]).disabled=true;
  
  </script>";
  $m=$m+1;

}
     
 }
 if($m==3){
  echo "<script> 
  document.getElementById('btnBook').disabled=true;
  alert('No time slot available.Please go back and check other available halls');
  </script>";

 }

}
  

  

@endphp

<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
   
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript">
    $('#btnBook').click(function() {
      console.log("reached")
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
  </script>
  </body>
  <footer class="container">
  
  <!-- <p class="float-right" style="padding-top: 40px;"><a href="#">Back to top</a></p> -->
  <p class="float-left" style="padding-top: 100px;">&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</html>
