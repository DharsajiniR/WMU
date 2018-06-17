<!DOCTYPE html>
<html lang="en">
<head>
  <title>WmU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: blue;
   color: white;
   text-align: center;
   height: 70px
}

.carousel-inner{
    height: 550px;
}





.carousel .item{
    height: 550px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 500px;
}

    .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
}

  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
  
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    body {
    background-color: lightblue;
}
  </style>
</head>
<body bgcolor="#E6E6FA">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WmU</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="department.php">Department</a></li>
              <li><a href="transport.php">Transport</a></li>
              <li><a href="placement.php">Placement</a></li>
            </ul>
          </li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="contact.php">Contact</a></li>


      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
 
    <div class="col-sm-8 text-left"> 
      <h1>WHITMAN UNIVERSITY</h1>
      
    </div>
    
  </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
<li data-target="#myCarousel" data-slide-to="2" class="active"></li>

</ol>

<div class="carousel-inner">

<div class="item active">
<img class="img-rounded" class="img-responsive center-block"  style="width:100%" src="https://i.ytimg.com/vi/i2ZkWO1J_4M/maxresdefault.jpg"/>
</div>

<div class="item">
<img class="img-rounded" class="img-responsive center-block" style="width:100%" src="https://media1.fdncms.com/inlander/imager/walla-wallas-whitman-college-is-prestigio/u/original/2444655/whitmanresized.jpg"/>
</div>

<div class="item">
<img class="img-rounded" class="img-responsive center-block"  style="width:100%" src="http://www.whitman.edu/oldimages/45437F16-CB20-6A89-BAD142A9EE9EBB99_def.jpg"/>
</div>

	</div>
	
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>


</div>

<footer class="footer">

<h2><center>--WHITMAN--</center></h2>

</footer>

</body>
</html>
