<?php

    if(isset($_POST['submit'])){
   
        $Name = $_POST['customer_name'];
        $Email_ID = $_POST['email_address'];
        $Room_Type = $_POST['room_type'];
        $No_of_Guests = $_POST['no_of_guest'];
        $Arrival_Time= $_POST['arrival_time'];
        $Departure_Time= $_POST['departure_time'];

        $conn = mysqli_connect('localhost','root','','test');

        if ($conn->connect_error){
            die('connection failed  : '.$conn->connect_error);
        }else { 
            $query = "insert into put(Name,Email_ID,Room_Type,No_of_Guests,Arrival_Time,Departure_Time) values ('$Name','$Email_ID','$Room_Type',$No_of_Guests,'$Arrival_Time','$Departure_Time')";
            

            $status = mysqli_query($conn, $query);
            if($status){
                echo "ROOM BOOKED";                
            }else{
                echo  "Something Went Wrong....";
            }            
        }
    }
    else{
        echo "Enter Data First";
    }
?>