<?php
// headers
header('content-type: application/json');
// connecting the configuration files for database
include('servercon.php');

// preparing an sql query
$start = $dbconnect->prepare("SELECT id, name, age, salary FROM emp_tbl");
// running the sql query
$start->execute();
$result = $start->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);




?>