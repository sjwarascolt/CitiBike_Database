<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>CitiBike Database Project</title>
    <meta name="Generator" content="Cocoa HTML Writer">
    <meta name="CocoaVersion" content="1561.6"> 
    <style type="text/css">
      body {
      font-family: "Arial";
      color: 483D8B;
      background-color: #affaff;
      }
      
      .boxOne {
      width: 25%;
      height: 1300px;
      border-left:3px dotted 483D8B;
      float: left;
      padding-left: 1em;
      padding-right: 1em;
      }
      .boxTwo {
      width: 60%;
      height: 1235px;
      border-left:3px dotted 483D8B;
      padding-top: 4em;
      padding-left: 1em;
      padding-right: 1em;
      float: left;
      }
      table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 15%;
      }
      td, th {
      border: 0.5px solid #adddda;
      text-align: center;
      padding: 4px;
      }
      tr:nth-child(even) {
      background-color: #CBD107;
      }
      
      
    </style>
  </head>
  
  
  <body>
    <div class="boxOne">
      <form action="PBSProject.php" method="POST">
        <h1>CitiBike Project Team PBS</h1>
        <h2>Enter your SQL query:</h2>
        <textarea rows="8" cols="30" name="message_body"></textarea>
        <p></p>
	
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" value="Clear" />
      </form>
      
      <?php
	echo "<h2>Original DataBase Tables</h2>";
	
	echo "<li><font face='verdana'>StartGender</font></li>";
	echo "<br>";
	echo "<li><font face='verdana'>StationInfo</font></li>";
	echo "<br>";
	echo "<li><font face='verdana'>SummaryKeys</font></li>";

	?>
      
    </div>
    
    <div class="boxTwo">
      
      <h1>Results:</h1>
      
      <table>
	
	<?php
	  
	  if($_SERVER["REQUEST_METHOD"]=="POST") {
	  
	  $servername = "localhost";
	  $username = "";
	  $password = "";
	  $dbname = "bpinto";
	  
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  
	  if(!$conn) 
	  echo "Failed to connect to MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	
	}
	
	$name = $_POST["message_body"];
	
	if(stripos($name, "drop")!==false) {
	echo "<h2>Error(1):</h2>";
	echo "This interface does not accept SQL drop statements.";
	mysqli_close($conn);
	} else {
	
	$results = mysqli_query($conn,$name);
	
	if($conn->errno != 0) {
	echo "<p>Error:</p>";
	echo "($conn->errno)".$conn->error;
	}
	
	if (mysqli_num_rows($results) > 0) {
	$finfo = $results->fetch_fields();
	}
	
	echo "<tr>";
	  
	  foreach($finfo as $val) {
	  echo "<th>";
	    echo $val->name."        ";
	    echo "</th>";
	  }
	  
	  echo "</tr>";
	
	while($row=mysqli_fetch_array($results)) {
	echo "<tr>";
	for($i = 0; $i < mysqli_field_count($conn); $i++) {
			 echo "<td>".$row[$i]."</td>";
			 }
			 echo "</tr>";
			 }
			 
			 mysqli_close($conn);
			 }
			 
			 
			 if(stripos($name, "insert") !== false) {
			 echo "Row(s) Inserted";
			 }
			 
			 if(stripos($name, "create") !== false) {
			 echo "Table Created/Updated";
			 }
			 
			 if(stripos($name, "delete") !== false) {
			 echo "Row(s) Deleted";
			 }
			 
			 if(stripos($name, "update") !== false) {
			 echo "Table Created/Updated";
			 }
			 
			 ?>
      </table>
      
    </div>
    
  </body>
</html>
