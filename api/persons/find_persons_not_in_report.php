<?php
include '../connect.php';

$sql = "select p.* from pelanggan p where p.id not in (select r.id_person from pps r where r.state not in (1,2,3,4))";
$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $rows[] = $row;
    }
}
print json_encode($rows);
?>