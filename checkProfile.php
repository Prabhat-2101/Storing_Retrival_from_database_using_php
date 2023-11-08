<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body,html{
            font-family: 'Segoe UI';
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            background-image: url(Images/bg2.jpeg);
            background-size: cover;
        }
        .mainBody{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .mainBody header{
            width: 100%;
            height: 10%;
            text-align: center;
            font-variant: small-caps;
            color: blue;
        }
        .content{
            margin-top: 10%;
            width: 20%;
            height: 20%;
            display: flex;
            flex-direction: column;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 10px;
            text-align: center;
            box-shadow: 5px 5px 5px black;
        }
        .small{
            display: none;
        }
        .content h3{
            font-variant: small-caps;
        }
        .content input[type=text]{
            padding: 6px;
            border-radius: 5px;
            font-family: 'poppins';
        }
        .content footer{
            text-align: center;
            margin-top: 10px;
        }
        .content footer input[type=submit]{
            padding: 4px;
            border-radius: 5px;
            font-family: 'poppins';
            cursor: pointer;
        }
        @media screen and (min-width:0px) and (max-width:767px) {
            .large{
                display: none;
            }
            .small{
                display: block;
            }
            .content{
                width: 95%;
            }
            .content .field input {
                width: 55%;
                padding: 4px;
            }
        }
        @media screen and (min-width:768px) and (max-width:1024px) {
            .large{
                font-size: 1.2rem;
            }
            .content{
                width: 35%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mainBody">
            <header>
                <h1 class="large">Vignan's Foundation For Science, Technology & Research Couselling Portal</h1>
                <h1 class="small">Vignan University</h1>
            </header>
            <form action="profile.php" class="content" method="POST">
                <h3>Check Your Profile here</h3>
                <input type="text" name="cid" placeholder="Counselling id" title="only Digits" onkeypress="return onlyNumberKey(event)" required>
                <footer>
                    <input type="submit" value="Check Profile">
                </footer>
            </form>
        </div>
    </div>
</body>
<script>
function onlyNumberKey(evt) {     
    var ASCIICode = (evt.which) ? evt.which : evkeyCode
    if (ASCIICode > 31 && (ASCIICode < 48 |ASCIICode > 57))
        return false;
    return true;
}
</script>
</html>