<?php

include 'bd.php';

$id = $_GET['id'];

$q = " DELETE FROM `subject_table` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:display_subject.php');

?>