<?php
    include("connection.php");
    if(isset($_POST['patientRegistration']))
    {
        $name=$_POST['patientName'];
        $age=$_POST['patientAge'];
        $gender=$_POST['patientGender'];
        $address=$_POST['patientAddress'];
        $contact_number=$_POST['patientContact'];
        $blood_group=$_POST['patientBloodGroup'];
        $organ_needed=$_POST['organNeeded'];
        $stmt="INSERT INTO patients_registered(name,age,gender,address,contact_number,blood_group,organ_needed) VALUES('$name','$age','$gender','$address','$contact_number','$blood_group','$organ_needed')";
        if(mysqli_query($conn,$stmt))
        {
            echo "<script>
            window.location.href='organ_donation_management.html';
            alert('Patient registered sucessfully!!!')</script>";
        }
    }

?>