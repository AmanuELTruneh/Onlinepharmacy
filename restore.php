<?php

 $conn=mysqli_connect("localhost","root","","drug");
?>

<html>
<!--head> 
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
   <title>Restore</title>
</head-->
<body >
<?php

	
?>

<!-- End of right Menu -->
<!-- Content -->
<div id='content'>

        
<script type = "text/javascript" >
 function preventBack()
 {
 window.history.forward();
 } 
 setTimeout("preventBack()", 0); 
 window.onunload=function(){null};
 
</script>
   								
<?php
function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath)
	{
    // Connect & select the database
    $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 

    // Temporary variable, used to store current query
    $templine = '';
    
    // Read in entire file
    $lines = file($filePath);
    
    $error = '';
    
    // Loop through each line
    foreach ($lines as $line){
        // Skip it if it's a comment
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }
        
        // Add this line to the current segment
        $templine .= $line;
        
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';'){
            // Perform the query
            if(!$db->query($templine)){
                $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
            }
            
            // Reset temp variable to empty
            $templine = '';
        }
    }
    return !empty($error)?$error:true;
 
}	

 $domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="drug1";
 $x=0;
mysqli_connect($domain,$dbuser,$dbpass) or die(mysqli_error());
if(mysqli_select_db($con,$dbname))
$x=1;
else
$x=2;
if($x==2)
{
	
mysqli_query($con,"create database saving");
		echo "<br>Your Database is Successfully created";
}else if($x==1)

{ 
$output = "C:\wamp64\www\Drug-I-S\backup\drug1.sql";
$filePath  = 'C:\wamp64\www\Drug-I-S\backup\drug1.sql';
$restore=restoreDatabaseTables($domain, $dbuser, $dbpass, $dbname, $filePath);
if($restore)
 echo"<br>Database Is Successfully Is Restore";
 else
 echo"<br>Something Went Wrong, Database not Restore!";
}




 ?>


</div>


</body>
</html>
