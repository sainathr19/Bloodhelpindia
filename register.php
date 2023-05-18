<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="display.css"></link>
    <link rel="icon" href="logo.png">
    <title>Bloodhelp India</title>
</head>
<body>
  <div class="container">


 </div>

<?php
    include 'connect.php';
    if(!empty($_POST['name']) and !empty($_POST['dob']) and !empty($_POST['bgroup']) and !empty($_POST['phone']) and !empty($_POST['state']) and !empty($_POST['district']) and !empty($_POST['check']))
    {
    
        $i_fullname=$_POST['name'];
        $i_bgroup=$_POST['bgroup'];
        $i_dob=$_POST['dob'];
        $i_phonenumber=$_POST['phone'];
        $i_email=$_POST['email'];
        $i_state=$_POST['state'];
        $i_district=$_POST['district'];
        $i_radioval=$_POST['check'];
    
        $q_dob=date("Y-m-d H:i:s",strtotime($i_dob));
        $sql = "INSERT INTO `donarbase`(`FULLNAME`,`BLOODGROUP`,`DOB`,`PHONE`,`EMAIL`,`STATE1`,`DISTRICT`,`LASTDONATION`)VALUES('$i_fullname','$i_bgroup','$q_dob','$i_phonenumber','$i_email','$i_state','$i_district','$i_radioval')";
        $query = mysqli_query($conn,$sql);
        if ($query)
        {
            echo "<h2 style='text-align:center;'>You Will be Notified of Any Blood Request</h2>
            <h2 style='text-align:center;'>Thankyou!</h2><script>alert('Registration Success');</script>";
        }
        else
        {
            echo "<script>alert('Errorrr');</script>";
        }
        
    }
    
   



?>

<script type="text/javascript">
    document.getElementById("button").onclick = function () {
        location.href = "register.html";
    };
</script>