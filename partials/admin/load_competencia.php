<?php  


	 $connect = mysqli_connect('localhost', 'id7857619_root', '254088Ma!', 'id7857619_mandra');


	 $output = array();  


	 $query = "SELECT * FROM  competencia";  


	 $result = mysqli_query($connect, $query);  


	 while($row = mysqli_fetch_array($result))  

	 {  

	      $output[] = $row;  

	 }  


	 echo json_encode($output);  


?>  