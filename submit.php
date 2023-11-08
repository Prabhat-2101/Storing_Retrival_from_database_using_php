<?php
    require('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['photo']) && isset($_FILES['tenth']) && isset($_FILES['twelth']) && $_FILES["photo"]["error"] == 0) {
            $cid = $_POST['cid'];
            $name = $_POST['fname']." ".$_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['contact'];
            $addr = $_POST['address'];
            $photo = $_FILES['photo'];
            $twelth = $_FILES['twelth'];
            $tenth = $_FILES['tenth'];
    
            $photoData = file_get_contents($photo['tmp_name']);
            $intermediateData = file_get_contents($twelth['tmp_name']);
            $tenthData = file_get_contents($tenth['tmp_name']);
    
            $photoData = mysqli_real_escape_string($conn, $photoData);
            $intermediateData = mysqli_real_escape_string($conn, $intermediateData);
            $tenthData = mysqli_real_escape_string($conn, $tenthData);
    
            $photoName = mysqli_real_escape_string($conn, $photo['name']);
            $photoType = mysqli_real_escape_string($conn, $photo['type']);
            $intermediateName = mysqli_real_escape_string($conn, $twelth['name']);
            $intermediateType = mysqli_real_escape_string($conn, $twelth['type']);
            $tenthName = mysqli_real_escape_string($conn, $tenth['name']);
            $tenthType = mysqli_real_escape_string($conn, $tenth['type']);
    
            $query = "insert INTO counselling (c_id,name,email,phone,photo_name, photo_type, photo_data, ssc_name, ssc_type, ssc_data, sc_name, sc_type, sc_data,address) VALUES ('$cid','$name','$email','$phone','$photoName', '$photoType', '$photoData', '$intermediateName', '$intermediateType', '$intermediateData', '$tenthName', '$tenthType', '$tenthData','$addr')";
            try{
                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('successful');
                    location.href = 'index.php'</script>";
                }
            }catch(mysqli_sql_exception $e){
                if ($e->getCode() == 1062) { 
                    echo "<script>alert('Duplicate Entry');location.href = 'index.php'</script>";
                    die();
                } else {
                    echo "Database error: " . $e->getMessage();
                }
            }
            finally{
                mysqli_close($conn);
            }
        }else{
            echo "error";
        }
    }
?>