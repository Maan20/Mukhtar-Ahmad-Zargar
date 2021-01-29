<html>
<head>
	<title> Patient Registration </title>
	
	<link href="mystyle.css" type="text/css" rel="stylesheet">
	
</head><body>
<div class="top">
    Contact Us +91 9697982520 / 01 | Maanhospital.com 
    </div>
<div class="logo">
        <img src="img/logo.jpg" height="140px" width="260px" align=left margin-top="-5px">   
        <ul align=center><font color=#green size="6px">
            <li> Maan Hospital Patiala     </li>
            Bawanigrah Road Patiala Punjab   
        </font></ul></div>
    <div class="menu" >
    <span>Maan Hospital</span>
    <ul>
                            <li><a href="index.html">HOME                      </a>                </li>
							<li><a href="about.html" >ABOUT US    </a>                </li>
							<li><a href="service.html">SERVICE   </a>                </li>
							<li><a href="service.html">DOCTORS                   </a>               </li>
							<li><a href="contact.html">CONTACT US               </a>               </li>
   </ul>
		</div>			
		<div class="side">
		    <ul>
		        <li><a href="patient.html">   Patient                     </a></li>
		        <li><a href="bill.html">      Bill Payment                </a></li>
		        <li><a href="detail.html">    Details                     </a></li>

		    </ul></div>

		   <fieldset border=3px>
		   <legend>
		   Patient Registration Form</legend>
        <form  action="patient.php" method="post" align=center>

<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['add']))
{
    $hostname = "localhost";
    $username = "id11695794_maan";
    $password = "hospital";
    $databaseName = "id11695794_maan";
    
     // get values form input text and number

    $reg = $_POST['reg'];
    $fname = $_POST['fname'];
    $fathername = $_POST['fathername'];
	$address = $_POST['address'];
    $dob = $_POST['dob'];
	$dept = $_POST['dept'];
    $aboutdisease = $_POST['aboutdisease'];
    $gender = $_POST['gender'];
	$days=rand(5, 15);
$medicine=rand(1000, 25000);
$daysrent=($days*150);
$other=rand(2000, 4000);
$total=$days+$medicine+$daysrent+$other;
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
echo"<table width=600px align=center>";    
    // mysql query to insert data

    $query = "INSERT INTO `patient`(`REG_NO`, `NAME`, `FATHER_NAME`, `ADDRESS`, `DOB`, `DEPT`, `ABOUT_DISEASE`, `GENDER`)  VALUES ('$reg','$fname','$fathername','$address','$dob','$dept','$aboutdisease','$gender')";
    
    // showing Data to User
       echo"<table width=900px>";
       echo "<tr bgcolor=blue>
      <th>REG NO.</th>
      <th> NAME</th>
      <th>FATHER's NAME </th>
      <th>ADDRESS</th>
        <th>DATE OF BIRTH <BR>YYYY/MM/DD</th>
      <th>DEPT NAME</th>
      <th>ABOUT DISEASE </th>
      <th>GENDER</TH>
    </tr>";
    echo"Your Entered Data:-";
    echo "<tr height=100px bgcolor=yellow><td>
$reg</td><td>$fname</td><td>$fathername</td><td>$address</td><td>$dob</td><td>$dept</td><td>$aboutdisease</td><td>$gender</td></tr>";
    echo"</table>";
    
    $result = mysqli_query($connect,$query);
    

    
    
    echo"<tr height=350px><td>";
    // check if mysql query successful

    if($result)
    {
        echo '<font size=17px color=green><h2>Data Inserted Successfully</h2><br>
              To Search For Detail go to below link:</font>';
              
echo"$medicine, $daysrent, $other, $total";
     $query = "INSERT INTO `bill`(`REG_NO`,`DAYS`,`RENT`, `MEDICINE`, `OTHER`,`TOTAL`)  VALUES ('$reg','$days','$daysrent','$medicine','$other','$total')";
$result1 = mysqli_query($connect,$query);
    }
    
    else{
        echo '<font size=25px color=red> Data Not Inserted<br>&nbsp;</font> 
               <font size=10>Reasons may be:-<br>
               -Reg No. May Already Exist.<br>
               -DOB may be Duplicate.<br>
               -Wrong Data Insertion.<br><br><br></font>';
    }
    
   // mysqli_free_result($result);
    mysqli_close($connect);
}
echo"</td></tr><tr><td>";
echo"<a href=detail.html"."><h1 border=3px>Detail Page</h1></a>";
echo"</td></tr><tr height=300px><tr>&nbsp;</table>"
?> 
		   
    <div class="footer">
                  <table  cellspacing=20px font color=white align=center><tr><td>
                    <font color=white size=4px>
                    <h3>Locate Us</h3><b> 
                  NH - 7, Near Patiala .<br>
                  Vill. XYZ,<br>
                  Tehsil. Patiala (M)<br>
                  District Patiala,<br>
                  Pin 147001, (Punjab)
                  </b></font></td>
                                        <td>
                                        <font color=white size="4px">
                                            <b> <h3>Time Table</h3>
                                        Our activities24/7 Open<br>
                                        Visitors09:00am - 04:00pm<br>
                                        Dispensary24/7 Open<br>
                                        Ambulance24/7 Open<br>
                                        Security team  24/7
                                        </b></font><td></tr></table>
              <h5 align=left> Website Developed by : MAZ. Contents are being provided by Maan Hospital </h5>                
    </div>
</body>
</html>