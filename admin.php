<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Portal</title>
  <style>
    /* Basic styling for navigation bar */
    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    #patientsBtn,#donorsBtn{
      text-decoration:none;
    }
    
  </style>
</head>
<body>
    <h1>Welcome to Medical Portal</h1>
  
  <!-- Navigation Bar -->
  <nav>
    <a href="organ_donation_management.html" id="homeBtn">Home</a>
    <a href="#" id="adminBtn">Admin</a>
    <a href="organ_donation_management.html" id="patientBtn">Patient</a>
    <a href="organ_donation_management.html" id="donorBtn">Donor</a>
  </nav>
  <div>
    <a href="#" id="patientsBtn"><h2>Patients registered</h2></a>
    <a href="#" id="donorsBtn"><h2>Donars registered</h2></a>
  </div>
  <div id="patients" style="display:none;" align="center">
    <h2>Patients Registered</h2>
    <table border="1px solid black">
      <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Address</td>
        <td>Contact Number</td>
        <td>Blood Group</td>
        <td>Organ Needed</td>
      </tr>
      <tr>
        <?php
          $query="select * from patients_registered";
          $result=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($result))
          {
        ?>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['organ_needed']; ?></td>
      </tr>
        <?php
          }
        ?>
    </table>

  </div>
  <div id="donors" style="display:none;" align="center">
    <h2>Donars Registered</h2>
    <table border="1px solid black">
      <tr>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Address</td>
        <td>Contact Number</td>
        <td>Blood Group</td>
        <td>Organ Donatable</td>
      </tr>
      <tr>
        <?php
          $query="select * from donars_registered";
          $result=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($result))
          {
        ?>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['organ_donatable']; ?></td>
      </tr>
        <?php
          }
        ?>
    </table>
  </div>
  <script>
    // Show/hide sections based on navigation
    document.getElementById('patientsBtn').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('patients').style.display = 'block';
      document.getElementById('donors').style.display = 'none';
    });

    document.getElementById('donorsBtn').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('patients').style.display = 'none';
      document.getElementById('donors').style.display = 'block';
    });
  </script>

</body>
</html>