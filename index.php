<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oospital</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/JannaLTRegular.css">
</head>
<body>
    <div class="main">
        <div class = "logo">
            <img src="images/logo.png" alt="">
            <h2> Fouda's Hospital</h2>
        </div>
        <div class="book">
            <p>Welcome to Fouda's Hospital.</p>
            <p>To book, fill out the form.</p>
            <form action="index.php" method="post">
            <input type="text" placeholder="Enter Your Name" name="name">
            <input type="text" placeholder="Enter Your Mail" name="email">
            <input type="date"  name="date">
            <input class="sub"type="submit" value="Book now" name="send">
            </form>

            <?php


            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbName = "hospital";
            $conn = mysqli_connect($host,$user,$pass,$dbName);

            $pName =$_POST['name'];
            $pEmail =$_POST['email'];
            $pDate =$_POST['date'];
            $pSend =$_POST['send'];

            if($pSend){
                $query = "INSERT INTO patients(name,email,date) VALUE('$pName','$pEmail','$pDate')";
                $result = mysqli_query($conn,$query);
                echo "<p style='color:green'>" ."Book Is Completed". "</p>";
            }else{
                echo "<p style='color:red'>" ."Sorry". "</p>";
            }

            ?>
        </div>
    </div>
</body>
</html>