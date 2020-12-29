<?php

include 'bd.php';

$id = $_GET['id'];

$q = " DELETE FROM `people` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:dispaly.php');

?>