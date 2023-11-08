<?php
require('connection.php');
if (mysqli_connect_errno()) {
    die('Connection failed: ' . mysqli_connect_error());
}
if (isset($_GET['type']) && isset($_GET['id'])) {
    $type = $_GET['type'];
    $cId = $_GET['id'];
    $typeColumn = ($type === 'tenth') ? 'sc_data' : 'ssc_data';

    $sql = "SELECT $typeColumn FROM counselling WHERE c_id = $cId";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $type . '_certificate.pdf"');
        echo $row[$typeColumn];
        exit;
    } else {
        echo 'Certificate not found.';
        exit;
    }
}
?>