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
		   DOCTOR'S DETAIL</legend>
<?php
	
if(isset($_POST['doc'])){
	$tag = $_POST{'tag'}; 
}
    $hostname = "localhost";
    $username = "id11695794_maan";
    $password = "hospital";
    $dbname = "id11695794_maan";
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM doctor where TAG_NO='$tag' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
echo"<h3 align=center>All The Doctors Are Very Qualified And Experienced,<br> But <i> {$row['NAME']} </i>Is Like God's Gift To MAAN Hospital and also Mankind for Servicing the Society.</h3>";
        
echo"<TABLE align=center bgcolor=gold width=90% height=800px border=1px";        
echo"<tr><td colspan=2 Height =100px><h1>{$row['NAME']}'S Profile</h1></td><tr>";
echo"<tr><td>TAG No</td>                                     <td> {$row['TAG_NO']}-MAAN-2015 </td></tr><tr>
<td>NAME</td>                                                <td><b> {$row['NAME']} </b> </td></tr><tr>
<td> DESIGNATION</td>                                        <td> {$row['DESIGNATION']}  </td></tr><tr>
 <td>QUALIFICATION</td>                                      <td> {$row['QUALIFICATION']}  </td></tr><tr>
<td>ADDRESS</td>                                             <td> {$row['ADDRESS']}  </td></tr><tr>
<td>EXPERIENCE</td>                                          <td> {$row['EXPERIENCE']}  </td></tr><tr>
<td>DEPARTMENT</td>                                          <td> {$row['DEPT']} </td></tr><tr>
<td colspan=2><h2>DEPARTMENT AND PERSONAL INFORMATION</h2></td></tr><tr> <td colspan=2><h3> {$row['INFO']} </h3></td></tr><tr><tr></tr>";
echo"</table>";
    }

} else {
    echo "No Data Found For Your Query:";
    
}
$conn->close();

?>
              
    </div>
</body>
</html>