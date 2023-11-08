<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Counselling Form</title>
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <form class="content" action="submit.php" method="POST" enctype = "multipart/form-data">
            <header>
                <h2>Counselling Form</h2>
                <hr><hr><hr>
            </header>
            <div class="field">
                <label>Counselling Id: </label>
                <input type="text" name="cid" required>
            </div>

            <div class="field">
                <label>First Name: </label>
                <input type="text" name="fname" onkeypress="return onlyLetter(event)" required>
            </div>

            <div class="field">
                <label>Last Name: </label>
                <input type="text" name="lname" onkeypress="return onlyLetter(event)" required>
            </div>

            <div class="field">
                <label>Email: </label>
                <input type="text" name="email" required>
            </div>

            <div class="field">
                <label>Phone: </label>
                <input type="text" name="contact" title="10 digits" pattern="[6-9]{1}[0-9]{9}" onkeypress="return onlyNumber(event)" required>
            </div>

            <div class="field">
                <label>Profile Photo: </label>
                <input type="file" name="photo" accept="image/jpeg" required>
            </div>

            <div class="field">
                <label>12th certificate: </label>
                <input type="file" name="twelth" accept=".pdf" required>
            </div>

            <div class="field">
                <label>10th certificate: </label>
                <input type="file" name="tenth" accept=".pdf" required>
            </div>
            
            <div class="field">
                <label>Address: </label>
                <textarea name="address" cols="20" rows="5"></textarea required>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
            <div class="field">
                <a href="checkProfile.php">Check Profile</a>
            </div>
        </div>
    </div>
</body>
</html>