<?php
    include("connection.php");
    if(isset($_POST['donorRegistration']))
    {
        $name = $_POST['donorName'];
        $age = $_POST['donorAge'];
        $gender = $_POST['donorGender'];
        $address = $_POST['donorAddress'];
        $contact_number = $_POST['donorContact'];
        $blood_group = $_POST['donorBloodGroup'];
        $organ_donatable = $_POST['organDonatable'];

        $stmt = "INSERT INTO donars_registered(name, age, gender, address, contact_number, blood_group, organ_donatable) 
                 VALUES('$name', '$age', '$gender', '$address', '$contact_number', '$blood_group', '$organ_donatable')";

        if(mysqli_query($conn, $stmt))
        {
            echo "<script>
                alert('Donor registered successfully!');
                window.location.href='organ_donation_management.html';
            </script>";
        }
        else
        {
            echo "<script>alert('Error while registering donor.');</script>";
        }
    }
?>
