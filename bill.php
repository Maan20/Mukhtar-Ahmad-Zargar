<html>
<head>
	<title> Bill Detail </title>
	
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
	
if(isset($_POST['bill'])){
	$reg = $_POST{'reg'}; 
}

    $hostname = "localhost";
    $username = "id11695794_maan";
    $password = "hospital";
    $databaseName = "id11695794_maan";
$conn = new mysqli($hostname, $username, $password, $databaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT c.* , p.* FROM patient c,bill p WHERE c.REG_NO=p.REG_NO ";
// $sql = "SELECT REG_NO,NAME,DOB,DEPT,GENDER FROM patient where REG_NO='$reg' ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
       echo"Result related to Ur Query is :-<br>";


    while($row = $result->fetch_assoc()) {
    //   used to filter only desired result...
        if ($row['REG_NO']=$reg){
 echo "<table width=85% height=600px align=center border=5px bordercolor=red bgcolor=blue>";
               echo"<tr><td colspan=4 align=center><FONT SIZE=30PX>&nbsp;&nbsp;&nbsp;MAAN HOSPITAL BILL</FONT></td></tr>";
               
echo "<tr bgcolor=green>
      <th>Reg No.:</th>                         <td><H3>{$row['REG_NO']}</H3></td>
       <th>DOB: <BR>YYYY/MM/DD</th>             <td><H3>{$row['DOB']}</H3></td> </tr><tr bgcolor=green>
    <th>NAME:</th>                              <td><H3>{$row['NAME']}</H3></td>
      <th>DEPT.: </th>                          <td><H3>{$row['DEPT']}</H3></td>   </tr><tr bgcolor=white >
      <td colspan=2> Perticulars</td>           <td >No.s/Rate</td><td>Total</td></tr ><tr bgcolor=yellow>
      <td colspan=2> Days<br></td>              <td><B>{$row['DAYS']}</B></td><td></td></tr><tr bgcolor=yellow>
    <td colspan=2> Room/Day</td>                <td>Rs:150</td><td><B> {$row['RENT']} </B></td></tr><tr bgcolor=yellow>
        <td colspan=2> Medicine</td>            <td></td><td><B>{$row['MEDICINE']}</B></td></tr><tr bgcolor=yellow>
      <td colspan=2> Other Charges</td>         <td></td><td><B>{$row['OTHER']}</B></td> </tr><tr bgcolor=White>
     <td colspan=2> <H3>Total</H3></td>                  <td>--</td><td><H3>{$row['TOTAL']} </H3></td> </tr><tr bgcolor=yellow>
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