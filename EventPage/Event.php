<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Event.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>  
  <nav>   
  <ul>
    <div id="menu">
      <li><a href="Homepage.html">Home</a></li>
      <li><a href="#">My Events</a></li>
      <li><a href="#">Add Event</a></li>
    </div>
   </ul>
</nav>
  
  <div class="main">
     <header class = "centered">
       <img src="EventImages/Chatauqua.jpg" alt="Chataqua Park" style="width:750px;height:500px;">
      <h1>Chatauqua Hike</h1>
    </header>
    

    <section class = "centered">
      
      <article class = "desc">
        <?php
        $id=$_POST["primaryKey"];
        echo $id;
        $conn = mysqli_connect("localhost","tomeldar","1234abcd","RVSQL");
          if (!$conn){  die('Could not connect: ' . sql_error());}
        $sql = "SELECT description, startTime, endTime, location FROM Event WHERE description='Riri'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);
        if ($row) {
          //echo "nice<BR>";
          $venue = $row["location"];
          //echo $venue;
          echo "<p>Event Info: " . $row["description"]. " - Time: " . $row["startTime"]. " " . $row["endTime"]. "<br>Location: " . $row["location"]. "</p>";
          echo "<iframe
                  width='600'
                  height='450'
                  frameborder='0' style='border:0'
                  src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBeMVx9l1DZ6Rfn_yd05noIx28CXfX64ts&q=".$venue.",Denver,CO' allowfullscreen>
                </iframe>";
          
        } else {
          echo "lol";
        }
      ?>
      </article>
      
<section id="eventbox">

<div class="container">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="col-md-3"><a href="#"><img src="EventImages/friend1.jpg" alt= "Friend1" style= "width:300px;height:300px";></div>
    </div>

    <div class="item">
      <div class="col-md-3"><a href="#"><img src="EventImages/friend2.jpg" alt= "friend2" style= "width:300px;height:300px";></div>
    </div>

    <div class="item">
      <div class="col-md-3"><a href="#"><img src="EventImages/friend3.jpg" alt= "friend3" style= "width:300px;height:300px";></div>
    </div>

    <div class="item">
      <div class="col-md-3"><a href="#"><img src="EventImages/friend4.jpg" alt= "friend4" style= "width:300px;height:300px;"></div>
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
</div>

</div>

</section>
   
    <section class = "posts">
      
      <article class = "rest1">
        <div class = "left"><img src="EventImages/lindaPerry.jpg" alt= "User1" style= "width:125px;height:125px;"><h1>Linda Perry</h1></div>
        <p>I went last year and the hike was fun! It was a great way to meet the members of the club and an awesome team-bonding experience. 
</p> </article>
      
    <article class = "rest2">
        <div class = "left"><img src="EventImages/ericShwartz.jpg" alt= "User2" style= "width:125px;height:125px;" ><h1>Eric Schwartz</h1><div>
        <p>This hike was so difficult for me. It was nice having a group of awesome people encourage me the whole way through. 
</p> </article>
    


      <article class = "people centered"><h1>Images</h1> 
            <img src="http://placehold.it/150x150" >
     
            <img src="http://placehold.it/150x150" >
      </article>  
    </section>
    
  </div>
</body>
</html>

