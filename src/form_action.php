<?php
$insert = false;
if(isset($_POST['name'])){
    $insert = true;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']
    $roll_number = $_POST['roll_number']; 
    $registration = $_POST['registration']; 
    $class = $_POST['class']; 
    $gender = $_POST['gender']; 
    $father_name = $_POST['father_name']; 
    $mother_name = $_POST['mother_name']; 
    $student_no = $_POST['student_no']; 
    $parents = $_POST['parents']; 
    $dob = $_POST['dob']; 
    $address = $_POST['address']; 
    $sql="INSERT INTO `application`.`detail` ( `fname`, `mname` , `lname` , `roll_number`, `registration`, `class`, `father_name`, `mother_name`, `Student_no`, `parent's`, `birthdate`, `gender`, `address`, `date`) VALUES ( '$fname', '$lname', '$roll_number', '$registration', '$class', '$gender', '$father_name', '$mother_name', '$student_no', '$parents', '$dob', '$address', current_timestamp())";

    //echo $sql;
    
    if($con->query($sql) == true){
        //echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
}
?>