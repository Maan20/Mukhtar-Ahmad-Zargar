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
		   Patient Detail</legend>
<?php
	
if(isset($_POST['patientdetail'])){
	$reg = $_POST{'reg'}; ;
}

    $hostname = "localhost";
    $username = "id11695794_maan";
    $password = "hospital";
    $databaseName = "id11695794_maan";
$conn = new mysqli($hostname, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM patient WHERE REG_NO='$reg'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
       echo"Result related to Ur Query is :-<br>";


    while($row = $result->fetch_assoc()) {
    //   used to filter only desired result...
        if ($row['REG_NO']== $reg){
 echo "<table width=95% height=600px align=center   bordercolor=red bgcolor=#40ff00>";
               echo"<tr><td colspan=4 align=center><FONT SIZE=30PX>&nbsp;&nbsp;&nbsp;MAAN HOSPITAL PATIENT DETAIL</FONT></td></tr>";
               
echo "<tr bgcolor=white>
      <td>Reg No.:</td>                          <td>{$row['REG_NO']}</H3></td></tr><tr bgcolor=#ffff00>
       <td>NAME</td>                            <td><H2>{$row['NAME']}</H2></td> </tr><tr bgcolor=white>
    <td>FATHER NAME</td>                        <td>{$row['FATHER_NAME']}</td></tr><tr>
      <td>ADDRESS </td>                          <td>{$row['ADDRESS']}</td>   </tr><tr bgcolor=#ffff00 >
      <td> DOB</td>                             <td>{$row['DOB']}</td>   </tr><tr bgcolor=white >
      <td > DOB<br></td>                        <td>{$row['DEPT']}</td></tr><tr bgcolor=yellow>
    <td> DEPT</td>                              <td>{$row['DEPT']}</td>   </tr><tr bgcolor=white >
        <td> ABOUT DISEASE</td>                 <td>{$row['ABOUT_DISEASE']}</td></tr><tr bgcolor=yellow>
      <td> GENDER</td>                          <td>{$row['GENDER']}</td> </tr><tr bgcolor=White>
     <td> REMARKS</td>                          <td>{$row['REMARKS']} </td> </tr><tr bgcolor=yellow>
      ";
      echo"</table>";
    }}
} else {
    echo "No Data Found For Your Query:";
    
}
$conn->close();

?> 
              
    </div>
</body>
</html>