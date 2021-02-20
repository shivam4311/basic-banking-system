<?php 

include('connection.php');

//selecting data to show
$sql = "SELECT * FROM `bank`";
$result = mysqli_query($con, $sql);
mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System</title>
   
    <link rel="stylesheet" href="css/style.css">
<style>
body {
  background-image: url('back/back.jpg');
}
</style>
</head>
<body>
    <section class="containerr">
        <div>
            <table class="center">
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Current Balance(in Rs.)</th>
                </tr>
                <?php 
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $sno = $sno + 1;
                        echo "<tr>
                        <td scope='row'>". $sno . "</td>
                        <td>". $row['name'] . "</td>
                        <td>". $row['email'] . "</td>
                        <td>". $row['currentbalance'] . "</td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
      <center>  <div class="primary">
            <a href="./selectuser.php" class="btn">Select User</a>
            <a href="./index1.php" class="btn">Home</a>
</center>
        </div>
	</section>
</body>
</html>
                        
    