<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="body.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>



.bg {
    
   
        height: 100%;     
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   
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





</style>
</head>
<body>

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
        <li class="active"><a href="index.php">Home</a></li>
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
  

</div>

<div class="bg">


<div class="container">

<br><br>


<br><br>

<h4>Send Us Message</h4>

<form action="send.php" method="post">
 <div class="control-label col-sm-4" >
    <div class="form-group">
     
      
        <input type="text" class="form-control"  placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter in form xyz@abc.com">
      </div>
    
    <div class="form-group">
      
              
        <input type="text" class="form-control" placeholder="Enter mob no" name="mobileno" pattern="[789][0-9]{9}">
      </div>
    
    <div class="form-group">        
    <textarea class="form-control" placeholder="Messages" name="message"></textarea>
      </div>

      
<div class="form-group">        
      <div class="col-sm-1"> 
        <button class="btn btn-default">Send</button>
      </div>
</div>
</div>
</div>

    


  </form>
<br><br>
<div>
 <center>
<h2>ADDRESS</h2>
<p>
   R.S.M. Nagar, <br> Gummidipoondi Taluk,<br>Tiruvallur, <br>Kavaraipettai, <br>Tamil Nadu 601206

</p>
 </center>
</div>



</div>
</body>
</html>