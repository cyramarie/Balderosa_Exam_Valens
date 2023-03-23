



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PAINT JOBS</title>
</head>
<body>
    <h1> New Paint Job</h1>
    <img src="car.jpg" alt="Car" class="image">
    <h2> Car Details</h2>

        <form action="index1.php" method="post">
            <div>
              <label>PlateNo</label>
              <input type="text" class="PlateNo" name="PlateNo" required/>
            </div>
            <div>
              <label>Current Color:</label>
              <select name="Current" class="Current">
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                </select>
            </div>
            <div>
              <label>Target Color</label>
              <select name="Target" class="Target">
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                </select>
            </div>
            <button class="submit"  name="submit" type="submit" value=" SUBMIT ">Submit</button>
          </form>
    
</body>
</html>