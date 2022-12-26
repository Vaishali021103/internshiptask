<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body >

    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="vsv">
                <h2>Registration Form</h2>
            </div>

            <label class="ssv" for=" ">Email: 
            </label><br>
            <input type="email" placeholder="Enter your email" name="email"><br>
            <label class="ssv" for=" ">Username: 
            </label><br>
            <input type="text" placeholder="Enter Username" name="username"><br>
            <label class="ssv"for=" ">Password:</label><br>
            <input type="password"placeholder="Enter Password" name ="password"><br>
            <button class = "btn"type="submit" name = "submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php

session_start();
if (isset($_POST) && $_POST){
    $conn = mysqli_connect("localhost","root","","interntask","3309");
    if(!$conn){
        echo "Can't connect database" . mysqli_connect_error($conn);
        exit;
    }

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    

    $query = "INSERT into stud(email,username,password)VALUES('$email','$username','$hash');"; 
    $result= mysqli_query($conn, $query);


    if(!$result){
        echo "Query issue.".mysqli_error($conn);
    }
    else{
        echo "<script>
        alert('Successfully registered!');
        window.location.href = 'http://localhost/internshiptask/index.php';
        </script>;";
    }   
}
?>


