<?php

 
$conn=mysqli_connect("localhost","root","","drug"); 
?>

<html>
<!--head> 
  <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
   <title>Backup</title>
</head-->
<body >

        
<script type = "text/javascript" >
 function preventBack()
 {
 window.history.forward();
 } 
 setTimeout("preventBack()", 0); 
 window.onunload=function(){null};
 
  </script>
  
 								
<?php
if($conn)
{
$tables = array();
$query = mysqli_query($conn, 'SHOW TABLES');
while($row = mysqli_fetch_row($query))
{
     $tables[] = $row[0];
}

$result = "";
foreach($tables as $table)
{
$query = mysqli_query($conn, 'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);

$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($conn, 'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++)
 {
while($row = mysqli_fetch_row($query))
{
   $result .= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++)
     {
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j]))
       {
		   $result .= '"'.$row[$j].'"' ; 
		}
		else
		{ 
			$result .= '""';
		}
		if($j<($num_fields-1))
		{ 
			$result .= ',';
		}
    }
   	$result .= ");\n";
}
}
$result .="\n\n";
}

//Create Folder
$folder = 'C:\wamp64\www\Drug-I-S\backup\\';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);

//$date = date('m-d-Y-h-m-s'); 
$filename = $folder."drug"; 

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$result);
fclose($handle);
?>

	
	<?php
	
        echo "<script>alert('Database Backed Up Successfully!');</script>.</a> </h2>";
     ?>
<script><?php echo("location.href = '/Drug-I-S/admin.php'"); ?></script>

<?php exit();  
	  // echo "<tr><td>Path: ".$filename."</td></tr>";
        }
    ?>               

</div>

</body>
</html>
