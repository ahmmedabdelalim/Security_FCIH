<?php
require 'logout.php';
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

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

   <style>
.link {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

 .link {
  background-color: green;
}
</style>
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 
<h2></h2>
<p> </p>

 
 

 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 <th> ID </th>
 <th> Day </th>
 <th> Date </th>
 <th> Subject </th>
 <th> Doctor </th>
 <th> Hours </th>
 <th> Delete </th>
 

 </tr >

 <?php
 

 include 'bd.php'; 
 $q = "select * from subject_table ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['day'];  ?> </td>
 <td> <?php echo $res['date'];  ?> </td>
 <td> <?php echo $res['subject'];  ?> </td>
 <td> <?php echo $res['doctor'];  ?> </td>
 <td> <?php echo $res['hours'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete_subject.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
  
 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>