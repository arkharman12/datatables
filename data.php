<?php

$data = array(
	array('FirstName'=>'Harman', 'LastName'=>'Singh', 'Email'=>'hsingh@gmail.com', 'Gender'=>'Male', 'Age'=>21, 'Department'=>'Computer Science', 'Contact'=>3175436677),
    array('FirstName'=>'Serena', 'LastName'=>'Kaur', 'Email'=>'skaur@yahoo.com', 'Gender'=>'Female', 'Age'=>19, 'Department'=>'Mathematics', 'Contact'=>9785436699),
    array('FirstName'=>'Tracy', 'LastName'=>'Williams', 'Email'=>'twilliams@hotmail.com', 'Gender'=>'Female', 'Age'=>25, 'Department'=>'Biology', 'Contact'=>3116736677),
    array('FirstName'=>'Ram', 'LastName'=>'Kumar', 'Email'=>'rkumar@hotmail.com', 'Gender'=>'Male', 'Age'=>29, 'Department'=>'Chemistry', 'Contact'=>3213336677),	
    array('FirstName'=>'Jake', 'LastName'=>'Heny', 'Email'=>'jhenry@hotmail.com', 'Gender'=>'Male', 'Age'=>31, 'Department'=>'Computer Engineering', 'Contact'=>9786736677),	
    array('FirstName'=>'Derek', 'LastName'=>'Armwood', 'Email'=>'darmwood@gmail.com', 'Gender'=>'Female', 'Age'=>30, 'Department'=>'Biology', 'Contact'=>9923204908),	
    array('FirstName'=>'Nova', 'LastName'=>'Garner', 'Email'=>'ngarner@hotmail.com', 'Gender'=>'Male', 'Age'=>20, 'Department'=>'Computer Science', 'Contact'=>8906802565),	
    array('FirstName'=>'Joie', 'LastName'=>'Browning', 'Email'=>'jbrowning@outlook.com', 'Gender'=>'Male', 'Age'=>18, 'Department'=>'Business', 'Contact'=>7105348128),	
    array('FirstName'=>'Zachary', 'LastName'=>'Acree', 'Email'=>'zacree@yahoo.in', 'Gender'=>'Male', 'Age'=>22, 'Department'=>'Physics', 'Contact'=>3450219835),	
    array('FirstName'=>'Tana', 'LastName'=>'Blundell', 'Email'=>'tblundell@gmail.com', 'Gender'=>'Female', 'Age'=>34, 'Department'=>'Aerospace Engineering', 'Contact'=>6224742684),	
    array('FirstName'=>'Jermaine', 'LastName'=>'Suzuki', 'Email'=>'jsuzuki@hotmail.com', 'Gender'=>'Female', 'Age'=>39, 'Department'=>'Rocket Science', 'Contact'=>9237000859),	
    array('FirstName'=>'Onita', 'LastName'=>'Morman', 'Email'=>'omorman@yahoo.com', 'Gender'=>'Male', 'Age'=>41, 'Department'=>'Accountancy', 'Contact'=>4599745637),	
    array('FirstName'=>'Nettie', 'LastName'=>'Sugg', 'Email'=>'nsugg@outlook.com', 'Gender'=>'Female', 'Age'=>27, 'Department'=>'Business', 'Contact'=>8122697997),	
    array('FirstName'=>'Roselyn', 'LastName'=>'Easter', 'Email'=>'reaster@gamil.com', 'Gender'=>'Male', 'Age'=>32, 'Department'=>'Electrical Engineering', 'Contact'=>5392067287),	
    array('FirstName'=>'Arnold', 'LastName'=>'Goates', 'Email'=>'agoates@hotmail.com', 'Gender'=>'Female', 'Age'=>35, 'Department'=>'Chemistry', 'Contact'=>8840511989),	
    array('FirstName'=>'Twila', 'LastName'=>'Skelly', 'Email'=>'tskelly@outlook.com', 'Gender'=>'Male', 'Age'=>23, 'Department'=>'Physics', 'Contact'=>7101455707),	
    array('FirstName'=>'Elvis', 'LastName'=>'Wright', 'Email'=>'ewright@gmail.com', 'Gender'=>'Female', 'Age'=>26, 'Department'=>'Computer Science', 'Contact'=>7101455707)
	);
             
 
	$results = array(
		"sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
        "aaData"=>$data);
/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
}*/
 
echo json_encode($results);

?>