<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >

    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="vsv">
                <h2>LOGIN FORM</h2>
            </div>
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

// session_start();
// if (isset($_POST) && $_POST) {
//     $conn = mysqli_connect("localhost", "root", "", "interntask", "3309");

//     if (!$conn) {
//         die("Can't connect to db : " . mysqli_connect_error());
//     } else {
//         echo "Connection Sucessfull <br>";
//     }
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $query = "SELECT username, password FROM stud WHERE username='$username';";
//     $result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_assoc($result);

//     if ($username == $row['username'] and $password_verify($password, $row['password'])) {
//         $_SESSION['username'] = $username;
//         echo "<script>alert('Data Entered!');
//             </script>;";
//     }
//     else {
//         echo "<script>alert('Enter correct data');
//                     </script>;";
//     }
// }

session_start();
if (isset($_POST) && $_POST) {
    $conn = mysqli_connect("localhost", "root", "", "interntask", "3309");
    if (!$conn) {
        die("Can't connet to db : " . mysqli_connect_error());
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $email = $_POST['email'];
    
    
     $query = "SELECT username, password FROM stud WHERE username='$username';";
     $result = mysqli_query($conn, $query);
     $row= mysqli_fetch_assoc($result);

    //  password_verify($password, $row['password'])
    $valid= password_verify($password, $hash);
    print_r($valid);
    if ($username != $row['username'] and !$valid) {
    echo "<script>alert('Enter the correct data!');
    </script>;";} else {
    
    $_SESSION['username'] = $username;
      header("Location: proctor1.php");
    }    
  }
?>