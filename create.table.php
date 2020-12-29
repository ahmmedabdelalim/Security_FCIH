<?php

include 'bd.php';

if(isset($_POST['done'])){
   

 $day = $_POST['day'];
 $date = $_POST['date'];
 $subject = $_POST['subject'];
 $doctor = $_POST['doctor'];
 $hours = $_POST['hours'];
  
 
 $q = " INSERT INTO `subject_table`(`day`,`date`,`subject`,`doctor`,`hours`  ) VALUES ( '$day', '$date','$subject','$doctor','$hours' )";

 $query = mysqli_query($conn,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Subject </h1>
 </div><br>

 <label> Day: </label>
 <input type="text" name="day" class="form-control"> <br>

 <label> Date </label>
 <input type="text" name="date" class="form-control"> <br>
 <label> Subject </label>
 <input type="text" name="subject" class="form-control"> <br>
 <label> Doctor </label>
 <input type="text" name="doctor" class="form-control"> <br>
 <label> Credit Hours </label>
 <input type="text" name="hours" class="form-control"> <br>
 


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>