<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8735309108203325"
     crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="display.css"></link>
    <link rel="icon" href="logo.png">
    <title>Bloodhelp India</title>
</head>
<body>
  <div class="container" id="maincontent">

<h2 style="text-align:center;">Available Donars</h2>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">S.No</th>
        <th scope="col">Name</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
</div>
    <?php
include 'connect.php';
if(!empty($_POST['bgroup']) and !empty($_POST['district']) and !empty($_POST['state']))
{
$group=$_POST['bgroup'];
$state=$_POST['state'];
$district=$_POST['district'];

$sql="select * from donarbase WHERE STATE1='$state'AND DISTRICT='$district' AND BloodGroup='$group'";
$res=mysqli_query($conn,$sql);
if($res)
{
    $sno=1;
    while($row=mysqli_fetch_assoc($res))
    {
        $name=$row['FULLNAME'];
        $phonenum=$row['PHONE'];
        echo '<tr>
        <th scope="row">'.$sno++.'</th>
        <td>'.$name.'</td>
        <td>'.$phonenum.'</td>
        <td>Coming Soon</td>
      </tr>';

    }
}
}
else
{
    echo "<script>document.getElementById('maincontent').innerHTML=''</script>";
    echo "<script>alert('Please fill all Details');</script>";
        echo "<div class='d-flex flex-column justify-content-center'>
        <h2 style='text-align:center;'>Request Failed</h2>
        <h2 style='text-align:center;'>Try Again!!</h2>
        <br>
        <button id='button2' class='btn btn-primary button' style='margin-left:45%;height:50px;width:150px;'>Go Back</button>
        </div>";
    
    
}

?>
    </tbody>
  </table>

</body>
</html>
<script type="text/javascript">
    document.getElementById("button2").onclick = function () {
        location.href = "request.html";
    };
</script>
