<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['cid'];
        require('connection.php');
        $query = "select * from counselling where c_id='$id';";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $photo = base64_encode($row['photo_data']);
            $twelth = base64_encode($row['ssc_data']);
            $tenth = base64_encode($row['sc_data']);
        } else {
            echo "<script>alert('No records found')
            location.href = 'checkProfile.php'</script>";
            die();
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="shortcut icon" href="images/favicon1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="profile.css?<?php echo time() ?>">
</head>
<body>
    <div class="container">
        <div class="content">
            <header>
                <h2>My Profile Card</h2>
                <hr><hr>
            </header>
            <div class="upper">
                <div class="uleft">
                    <div class="field"><label>Name: </label><input type="text" value="<?php echo $row['name']; ?>" readonly></div>
                    <div class="field"><label>Counselling Id: </label><input type="text" id="cid" value="<?php echo $row['c_id']; ?>" readonly></div>
                    <div class="field"><label>Email: </label><input type="text" value="<?php echo $row['email']; ?>" readonly></div>
                    <div class="field"><label>Address: </label><input type="text" value="<?php echo $row['address']; ?>" readonly></div>
                </div>
                <div class="uright">
                    <img src="data:image/jpeg;base64,<?php echo $photo; ?>" alt="image" id="img">
                </div>
            </div>
            <div class="lower">
                <div class="certificate">
                    <label>12th Certificate: </label>
                    <input type="button" value="View Certificate" onclick="changeToTwelth()" id="twelth">
                </div>
                <div class="certificate">
                    <label>10th Certificate: </label>
                    <input type="button" value="View Certificate" onclick="changeToTenth()">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function changeToTwelth(){
        var cid = document.getElementById('cid').value;
        viewCertificate("twelth",cid);
    }
    function changeToTenth(){
        var cid = document.getElementById('cid').value;
        viewCertificate("tenth",cid);
    }
    function viewCertificate(type, id) {
        window.open('view_certificate.php?type=' + type + '&id=' + id, '_blank');
    }
</script>
</html>