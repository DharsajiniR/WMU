<html>
<head>
<title>WmU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

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


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}




</style>




</head>
<body style="background-color:powderblue;">




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


<form action="submit.php" method="post" style="border:1px solid #ccc">

    <div style="padding-left: 50px"><h2>Admission Form</h2></div>

  <div class="container">
    

    
    <h3><b>PERSONAL DETAILS</B></h3>
    <br><br>
    <label><b>Name(as per hsc certificate)</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

<div>
    <br><br>
    <label><b>Date of Birth</b></label>
    <div class="control-group">
  <label for="dob-day" class="control-label"></label>
  <div class="controls">
    <select name="dobdate" id="dobdate" required>
      <option value="">Date</option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="dobmonth" id="dobmonth" required>
      <option value="">Month</option>
      <option value="">-----</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
    <select name="dobyear" id="dobyear" required>
      <option value="">Year</option>
      <option value="">----</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
    </select>
  </div>
</div>
    <br><br>
    <label><b>Nationality</b></label>
    <input type="text" placeholder="Enter country" name="nationality" required>
   <br><br>
   <label><b>Religion</b></label>
   <input type="text" placeholder="Enter Religion" name="religion" required>
 
<br><br>
    <label><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" pattern="[12][0-9]{1}" title="age between 17-29" required>
    <br><br>
    <label><b>Gender</b></label>
<div>
    <input type="radio" name="sex" value="male" size="10">Male
    <input type="radio" name="sex" value="Female" size="10">Female
    <input type="radio" name="sex" value="Other" size="10">Other
</div>
    <br><br>
    <label><b>Caste</b></label>
<div>
    <input type="radio" name="caste" value="SC/ST" size="10">SC/ST
    <input type="radio" name="caste" value="BC" size="10">BC
    <input type="radio" name="caste" value="OC" size="10">OC
    <input type="radio" name="caste" value="MBC" size="10">MBC
</div>
    <br><br>
    <label><b>Physically Handicapped</b></label>
<div>
    <input type="radio" name="handicapped" value="Yes" size="10">Yes
    <input type="radio" name="handicapped" value="No" size="10">No
</div>
     <br><br>
     <label><b>Blood Group</b></label>
   <div class="control-group">
  <label for="blood-group" class="control-label"></label>
  <div class="controls">
    <select name="bloodgroup" id="Blood-group" required>
      <option value="">Blood-group</option>
      <option value="">---</option>

    

  <option value="B+ve">B+ve</option>
  <option value="A+ve">A+ve</option>
  <option value="O+ve">O+ve</option>
  <option value="A-ve">A-ve</option> 
  <option value="A1B+ve">A1B+ve</option> 
  <option value="others">Others</option>
</select>
         
    </div>
  </div>

<br><br>
   <label><b>Applicant Contact No.</b></label>
   <input type="text" placeholder="Enter contact no." name="contact" pattern="[789][0-9]{9}" required>


<br><br>
   <label><b>Email</b></label>
   <input type="text" placeholder="Enter E-mail id" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter in form xyz@abc.com" required>

<br><br>
   <label><b>Aadhar card number</b></label>
   <input type="text" placeholder="Enter Aadhar card no.." name="aadhar" required>

<br><br>
   <label><b>Father's Name</b></label>
   <input type="text" placeholder="Enter Father's Name" name="fathername" required>

<br><br>
   <label><b>Father's Qualification</b></label>
    <div class="control-group">
  <label for="father's qualification" class="control-label"></label>
  <div class="controls">
    <select name="fatherqualification" id="father's qualification" required>
      <option value="">Qualification</option>
      <option value="">---</option>

    

  <option value="B.com">B.com</option>
  <option value="B.E">B.E.</option>
  <option value="B.tech">B.tech</option>
  <option value="LLB">LLB</option> 
  <option value="Bsc.">Bsc.</option>
  <option value="MBBS">MBBS</option>
  <option value="BDS">BDS</option> 
  <option value="others">Others</option>
</select>
         
    </div>
  </div>
  

<br><br>
   <label><b>Father's Occupation</b></label>
    <div class="control-group">
  <label for="father's occupation" class="control-label"></label>
  <div class="controls">
    <select name="fatheroccupation" id="father's qualification" required>
      <option value="">Occupation</option>
      <option value="">---</option>

    

  <option value="Business">Business</option>
  <option value="Engineer">Engineer</option>
  <option value="Doctor">Doctor</option>
  <option value="Teacher">Teacher</option> 
  <option value="others">Others</option>
</select>
         
    </div>
  </div>
  <br><br>
  <label for="address">Address:</label>
        <textarea rows="3" cols="30" name="address" id="address"></textarea>

 <br><br>
  <label for="Pin code">Pin code:</label>
        <textarea rows="1" cols="30" name="pincode" id="pincode"></textarea>

<br><br>
   <label><b>Mother's Name</b></label>
   <input type="text" placeholder="Enter Mother's Name" name="mothername" required>

<br><br>
   <label><b>Mother's Qualification</b></label>
    <div class="control-group">
  <label for="mother's qualification" class="control-label"></label>
  <div class="controls">
    <select name="motherqualification" id="mother's qualification" required>
      <option value="">Qualification</option>
      <option value="">---</option>

    

  <option value="B.com">B.com</option>
  <option value="B.E">B.E.</option>
  <option value="B.tech">B.tech</option>
  <option value="LLB">LLB</option> 
  <option value="Bsc.">Bsc.</option>
  <option value="MBBS">MBBS</option>
  <option value="BDS">BDS</option> 
  <option value="others">Others</option>
</select>
         
    </div>
  </div>
  

<br><br>
   <label><b>Mother's Occupation</b></label>
    <div class="control-group">
  <label for="mother's occupation" class="control-label"></label>
  <div class="controls">
    <select name="motheroccupation" id="mother's occupation" required>
      <option value="">Occupation</option>
      <option value="">---</option>

    

  <option value="Business">Business</option>
  <option value="Engineer">Engineer</option>
  <option value="Doctor">Doctor</option>
  <option value="Teacher">Teacher</option> 
  <option value="Home-maker">Home-maker</option>
  <option value="other">Others</option>
</select>
         
    </div>
  </div>

<br><br>
   <label><b>Guardian's Name</b></label>
   <input type="text" placeholder="Enter Guardian's Name" name="guardian name">

<br><br>
   <label><b>Relationship with Guardian</b></label>
   <input type="text" placeholder="Enter Relationship with Guardian" name="relationship">
<br><br>
<label><b>Guardian's Occupation</b></label>
    <div class="control-group">
  <label for="Guardian's occupation" class="control-label"></label>
  <div class="controls">
    <select name="guardian's occupation" id="guardian's occupation">
      <option value="">Occupation</option>
      <option value="">---</option>

    

  <option value="Business">Business</option>
  <option value="Engineer">Engineer</option>
  <option value="Doctor">Doctor</option>
  <option value="Teacher">Teacher</option> 
  <option value="other">Others</option>
</select>
         
    </div>
  </div>

<br><br>
   <label><b>Guardian's contact number</b></label>
   <input type="text" placeholder="Enter Contact number" name="contact"  pattern="[789][0-9]{9}">

<br><br>

<hr>

<h3><B>ACADEMIC DETAILS</B></h3> 
<br><br>
  <label><b>Higher Secondary Register Number</b></label>
   <input type="text" placeholder="Enter Register Number" name="reg-no" required>

<br><br>
  <label><b>Name of Board</b></label>
   <input type="text" placeholder="Enter Name of Board" name="board" required>


<br><br>
<label><b>Year of Passing</b></label>
    <div class="control-group">
  <label for="Year of Passing" class="control-label"></label>
  <div class="controls">
    <select name="year" id="year" required>
      <option value="">year</option>
      <option value="">---</option>
      <option value="2013">2017</option>
      <option value="2014">2018</option>
      <option value="2017">2015</option>
      <option value="2016">2018</option>
      <option value="2017">2017</option>
  
      </select>
         
    </div>
  </div>

<h3><b>H.S.C MARKS</b></h3>

<br>
<table>
  <tr>
    <th><b>Select Subject</b></th>
    <th><b>Full Mark</b></th>
    <th><b>Marks Obtained</b></th>
  </tr>
  <tr>
    <td>English</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Language</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Physics</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Chemistry</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Maths</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Computer/Biology</td>
    <td>200</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
</table>

<br><br>
  <label><b>Percentage</b></label>
   <input type="text" placeholder="Enter Percentage" name="Percentage" required>

<br><br>
  <label><b>Cut Off</b></label>
   <input type="text" placeholder="Enter Cut Off" name="cut-off" required>



<br><br>
<h3><b>S.S.L.C MARKS</b></h3>
<table>
  <tr>
    <th><b>Select Subject</b></th>
    <th><b>Full Mark</b></th>
    <th><b>Marks Obtained</b></th>
  </tr>
  <tr>
    <td>English</td>
    <td>100</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Language</td>
    <td>100</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Science</td>
    <td>100</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Social Science</td>
    <td>100</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  <tr>
    <td>Maths</td>
    <td>100</td>
    <td><textarea rows="1" cols="10" name="mark" id="mark"></textarea></td>
  </tr>
  
</table>

<br><br>
    <label><b>Department</b></label>
<div>
     <select name="department">
    <option value="IT">Information Technology</option>
    <option value="ECE">E.C.E</option>
    <option value="EEE">E.E.E.</option>
    <option value="CSE">C.S.E.</option>
    <option value="Civil">Civil Engineering</option>
  </select>

</div>
<h5>*Attach 10th marksheet and 12th marksheet xerox copy</h5>

<br><br>
    <label><b>Quota</b></label>
<div>
    <input type="radio" name="Management" value="Management" size="10">Management
    <input type="radio" name="Government" value="Government" size="10">Government
</div>

<br><br>
    <label><b>Scholarship(if any)</b></label>
    <input type="text" placeholder="Enter Scholarship" name="scholarship" >

<br><br>
    <label><b>First Graduate</b></label>
<div>
    <input type="radio" name="yes" value="yes" size="10">Yes
    <input type="radio" name="No" value="No" size="10">No
</div>
<h5>*Attach First Graduate, Community Certificate (if any)</h5>

<br><br>
    <label><b>Sports Quota(if any)</b></label>
    <input type="text" placeholder="Enter Sports Scholarship" name="scholarship" >
<br><br>
    <label><b>Ex-Service man(if any)</b></label>
    <input type="text" placeholder="Enter details" name="scholarship" >

<h3 style="text-align:center;"><b>DECLARATION</b></h3>

<p>     I hereby declare that the above given information is true to the best of my knowledge.</p>

<div style="width:100%; height:100%">
<button onclick="myFunction()">Submit</button>


</div>

   

</form>

</body>
</html>
