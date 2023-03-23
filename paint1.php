


<?php
$servername = "localhost";
$database = "exam";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];
  $action= "DONE";
	$query = "UPDATE car SET action = '$action' WHERE id = $id"; 
	mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <h1>PAINT QUEUE</h1>
    <form action="Ad_unpaid_orders.php" method="POST">

            <?php
            $sql = "SELECT * FROM car WHERE action = 'To do'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0)
            {
           ?>
              <table class="table table-striped">
                <thead class="thead-dark bg-zinc-700 text-white">
                  <tr>
                    <th> ID </th>
                    <th> PlateNo </th>
                    <th> Current Color</th>
                    <th> Target Color </th>
                    <th> ACTION </th>
                  </tr>
                </thead>

                <?PHP     
                 while($row = mysqli_fetch_assoc($result)){ //OUTPUT DATA OF EACH ROW
                ?>

                <tbody>
                  <tr>
                    <td><?php echo $row["id"]; ?> </td>
                    <td><?php echo $row["PlateNo"]; ?></td>
                    <td><?php echo $row["Current"]; ?></td>
                    <td><?php echo $row["Target"]; ?></td>
                    <td><?php echo "<a href='paint1.php?id=".$row['id']."' id='btn'>JOB DONE</a>"?></td>   
                  </tr>
                </tbody>
  
                <?php } ?>
              </table>
          
              <br>

            <?php } else { ?>
                <h4><center>0 RESULTS</center> </h4> <!--If there is no job queue-->
            <?php } ?>

          </form>  
          <h1>PAINT JOB STATUS</h1>
    
            <?php
            $sql = "SELECT * FROM car ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0)
            {
           ?>
              <table class="table table-striped">
                <thead class="thead-dark bg-zinc-700 text-white">
                  <tr>
                    <th> ID </th>
                    <th> PlateNo </th>
                    <th> Current Color</th>
                    <th> Target Color </th>
                    <th> ACTION </th>
                  </tr>
                </thead>

                <?PHP     
                 while($row = mysqli_fetch_assoc($result)){ //OUTPUT DATA OF EACH ROW
                ?>

                <tbody>
                  <tr>
                    <td><?php echo $row["id"]; ?> </td>
                    <td><?php echo $row["PlateNo"]; ?></td>
                    <td><?php echo $row["Current"]; ?></td>
                    <td><?php echo $row["Target"]; ?></td>
                    <td><?php echo $row["Action"]; ?></td>   
                  </tr>
                </tbody>

  
                <?php } ?>
              </table>
          
              <br>

            <?php } else { ?>
                <h4><center>0 RESULTS</center> </h4> <!--If there is no job queue-->
            <?php } ?>
</div>
</div>
</div>
</body>
</html>