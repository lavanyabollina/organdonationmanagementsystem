<?php
    include("connection.php");
    if(isset($_POST['login']))
    {
        $username=$_POST['adminUsername'];
        $password=$_POST['adminPassword'];
        $sql="select * from login where username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            header("Location:admin.php");
        }
        else
        {
            echo "<script>
            window.location.href='organ_donation_management.html';
            alert('Login failed. Invalid username or password!!!')</script>";
        }
    }
?>