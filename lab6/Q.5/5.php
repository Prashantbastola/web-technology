<?php 
 $name = array(1, 5, '$', "prashant", "suman" ,"pramod", "prajwal", "sabin", "sumin");

 sort($name);

 for ($i = 0; $i<count($name); $i++)
 {
 	echo $name[$i];
 	?><br><?php 
 }
 ?>
